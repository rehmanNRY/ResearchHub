<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user'])) {
  header('Location: ../../../index.php');
  exit();
}

include '../partials/_navbar.php';


include '../../controllers/ProfileController.php';

$user_id = $_SESSION['user']['user_id'];

// Instantiate Profile class
$profile = new Profile($db);

// Get Affiliations and Interests
$affiliations = $profile->getAffiliations($user_id);
$interests = $profile->getInterests($user_id);
$user_data = $profile->getUserDetail($user_id);



?>

<div class="min-h-screen text-white p-6 flex justify-center py-20 bg-gradient-to-r from-[#0e0a1f] via-[#2a1a4d] to-[#0e0a1f]">
  <div class="max-w-5xl w-full bg-purple-950 shadow-lg rounded-lg p-8 space-y-8">

    <!-- Profile Picture & Username Section -->
    <div class="flex items-center space-x-6">
      <div class="relative">
        <img class="w-32 h-32 rounded-full border-4 border-purple-700" src="<?= '/researchhub_project/public/uploads/profile_pics/' . htmlspecialchars($user_data[0]['profile_picture']) ?>" alt="Profile Picture">
        <label for="profilePic" class="absolute bottom-0 right-0 bg-purple-700 hover:bg-purple-600 cursor-pointer p-2 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
            <path d="M4 5a2 2 0 012-2h8a2 2 0 012 2v3h-1V5a1 1 0 00-1-1H6a1 1 0 00-1 1v10a1 1 0 001 1h3v1H6a2 2 0 01-2-2V5zm12 8a2 2 0 10-4 0 2 2 0 004 0zm1 0a3 3 0 11-6 0 3 3 0 016 0zm-3-4a1 1 0 00-1 1v4a1 1 0 001 1h1.5a.5.5 0 000-1H14v-4a1 1 0 00-1-1z" />
          </svg>
        </label>
      </div>
      <div>
        <h2 class="text-3xl font-bold"><?php echo htmlspecialchars($user_data[0]['full_name']) ?></h2>
        <p class="text-purple-300"><?php echo htmlspecialchars($user_data[0]['bio']) ?></p>
        <form action="../../controllers/ProfileController.php" method="POST" enctype="multipart/form-data" class="mt-1">
          <input type="file" id="profilePic" class="hidden" name="profilePic">
          <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
          <button type="submit" name="updateProfilePic" class="px-4 py-1.5 text-sm bg-green-600 text-white rounded-md hover:bg-green-500">Save Profile Picture</button>
        </form>
      </div>
    </div>

    <!-- Bio Section -->
    <div class="bg-purple-700 p-4 rounded-lg shadow-lg">
      <h3 class="text-xl font-semibold mb-2">Bio</h3>
      <p id="bioDisplay" class="text-purple-300"><?php echo htmlspecialchars($user_data[0]['bio']) ?></p>
      <button id="editBioBtn" class="mt-3 px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-500">Edit Bio</button>

      <!-- Bio Edit Form -->
      <form action="../../controllers/ProfileController.php" method="POST" id="bioForm" class="hidden mt-4">
        <textarea id="bioInput" name="bio" rows="4" class="w-full p-3 border border-purple-600 rounded-md bg-purple-900 text-white" placeholder="Tell us about yourself..."></textarea>
        <div class="flex justify-end space-x-4 mt-3">
          <button type="submit" name="updateBio" id="saveBioBtn" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-500">Save</button>
          <button id="cancelBioBtn" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-500" type="button">Cancel</button>
        </div>
      </form>



    </div>

    <!-- Affiliations Section -->
    <div class="bg-purple-700 p-4 rounded-lg shadow-lg">
      <h3 class="text-xl font-semibold mb-2">Affiliations</h3>
      <ul id="affiliationsList" class="text-purple-300 space-y-2">
        <?php foreach ($affiliations as $affiliation): ?>
          <li><?php echo htmlspecialchars($affiliation['institution_name']) . ', ' . htmlspecialchars($affiliation['department']) . ' (' . htmlspecialchars($affiliation['start_date']) . ' - ' . htmlspecialchars($affiliation['end_date']) . ')'; ?></li>
        <?php endforeach; ?>
      </ul>
      <button id="editAffiliationsBtn" class="mt-3 px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-500">Edit Affiliations</button>

      <!-- Affiliations Edit Form -->
      <div id="affiliationsForm" class="hidden mt-4">
        <div class="space-y-4">
          <!-- Existing Affiliations -->
          <?php foreach ($affiliations as $affiliation): ?>
            <div class="flex justify-between items-center bg-purple-900 p-4 rounded-md">
              <span><?php echo htmlspecialchars($affiliation['institution_name']) . ', ' . htmlspecialchars($affiliation['department']) . ' (' . htmlspecialchars($affiliation['start_date']) . ' - ' . htmlspecialchars($affiliation['end_date']) . ')'; ?></span>
              <form class="space-x-2" action="../../controllers/ProfileController.php" method="POST">
                <input type="hidden" name="affiliation_id" value="<?php echo $affiliation['affiliation_id'] ?>">
                <button type="submit" name="deleteAffiliation" class="px-2 py-1 bg-red-600 text-white rounded-lg hover:bg-red-500">Delete</button>
              </form>
            </div>
          <?php endforeach; ?>

          <!-- Add New Affiliation -->
          <button id="addAffiliationBtn" class="px-4 py-2 bg-green-600 rounded-lg text-white hover:bg-green-500">Add New Affiliation</button>
        </div>

        <form action="../../controllers/ProfileController.php" method="POST" id="affiliationForm" class="hidden mt-4">
          <input type="text" name="institution_name" placeholder="Institution Name" class="mb-2 p-2 border border-purple-600 rounded-md  bg-purple-900 text-white w-full">
          <input type="text" name="department" placeholder="Department" class="mb-2 p-2 border border-purple-600 rounded-md  bg-purple-900 text-white w-full">
          <input type="text" name="position" placeholder="Position" class="mb-2 p-2 border border-purple-600 rounded-md  bg-purple-900 text-white w-full">
          <div class="flex space-x-2">
            <input type="date" name="start_date" class="p-2 border border-purple-600 rounded-md bg-purple-900 text-white">
            <input type="date" name="end_date" class="p-2 border border-purple-600 rounded-md bg-purple-900 text-white">
          </div>
          <div class="flex justify-end space-x-4 mt-3">
            <button type="submit" name="addAffiliation" id="saveAffiliationBtn" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-500">Save</button>
            <button id="cancelAffiliationBtn" type="button" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-500">Cancel</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Research Interests Section -->
    <div class="bg-purple-700 p-4 rounded-lg shadow-lg">
      <h3 class="text-xl font-semibold mb-2">Research Interests</h3>
      <div id="interestsList" class="flex flex-wrap gap-3">
        <?php foreach ($interests as $interest): ?>
          <span class="px-3 py-1 bg-purple-600 text-sm rounded-lg shadow"><?php echo htmlspecialchars($interest['interest']); ?></span>
        <?php endforeach; ?>
      </div>
      <button id="editInterestsBtn" class="mt-3 px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-500">Edit Interests</button>

      <!-- Interests Edit Form -->
      <div id="interestsForm" class="hidden mt-4">
        <table class="w-full text-left">
          <thead>
            <tr class="text-purple-400">
              <th>Interest</th>
              <th class="text-right">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($interests as $interest): ?>
              <tr class="bg-purple-900">
                <td class="p-2"><?php echo htmlspecialchars($interest['interest']); ?></td>
                <td class="text-right">
                  <form action="../../controllers/ProfileController.php" method="POST">
                    <input type="hidden" name="interest_id" value="<?php echo $interest['interest_id']; ?>">
                    <button type="submit" name="deleteInterest" class="px-2 py-1 bg-red-600 text-white rounded-lg hover:bg-red-500">Delete</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <!-- Add New Interest -->
        <div class="mt-4">
          <button id="addInterestBtn" class="px-4 py-2 bg-green-600 rounded-lg text-white hover:bg-green-500">Add New Interest</button>
        </div>



        <form id="interestForm" class="hidden mt-4" action="../../controllers/ProfileController.php" method="POST">
          <input type="text" name="interest" placeholder="New Interest" class="mb-2 p-2 border border-purple-600 rounded-md bg-purple-900 text-white w-full">
          <div class="flex justify-end space-x-4 mt-1">
            <button type="submit" name="addInterest" id="saveInterestBtn" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-500">Save</button>
            <button id="cancelInterestBtn" type="button" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-500">Cancel</button>
          </div>
        </form>

      </div>
    </div>

  </div>
</div>

<!-- Scripts for Showing and Hiding Forms -->
<script>
  document.getElementById('editBioBtn').addEventListener('click', () => {
    document.getElementById('bioForm').classList.toggle('hidden');
  });
  document.getElementById('cancelBioBtn').addEventListener('click', () => {
    document.getElementById('bioForm').classList.add('hidden');
  });

  document.getElementById('editAffiliationsBtn').addEventListener('click', () => {
    document.getElementById('affiliationsForm').classList.toggle('hidden');
  });

  document.getElementById('editInterestsBtn').addEventListener('click', () => {
    document.getElementById('interestsForm').classList.toggle('hidden');
  });

  document.getElementById('addInterestBtn').addEventListener('click', () => {
    document.getElementById('interestForm').classList.toggle('hidden');
  });

  document.getElementById('cancelInterestBtn').addEventListener('click', () => {
    document.getElementById('interestForm').classList.add('hidden');
  });

  document.getElementById('addAffiliationBtn').addEventListener('click', () => {
    document.getElementById('affiliationForm').classList.toggle('hidden');
  });

  document.getElementById('cancelAffiliationBtn').addEventListener('click', () => {
    document.getElementById('affiliationForm').classList.add('hidden');
  });
</script>

<?php include '../partials/_footer.php' ?>