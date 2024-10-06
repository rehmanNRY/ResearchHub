<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user'])) {
  header('Location: ../../../index.php');
  exit();
}

include '../partials/_navbar.php';

?>

<div class="relative container mx-auto my-20 md:px-20 px-4">
  <!-- Forum Header -->
  <div class="bg-gradient-to-r from-purple-700 to-purple-900 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12 w-full">
    <h1 class="text-4xl font-bold">Discussion Forums</h1>
    <a href="createForum.php" class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-6 py-3 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600">Create New Topic</a>
  </div>
  <div class="relative w-full text-white">
    <p class="mb-8 text-gray-400">
      Create discussion forums where users can engage in scholarly discussions, ask questions, share insights, and collaborate on research topics.
    </p>

    <!-- Forum Post Container -->
    <div id="forum-posts" class="space-y-6">
      <!-- Dynamic Content Will Be Inserted Here -->
    </div>
  </div>

</div>

<?php include '../partials/_footer.php' ?>

<script>
  // Function to fetch forum data
  async function fetchForumPosts() {
    try {
      const response = await fetch('http://localhost/researchhub_project/app/controllers/forum/getForums.php');
      const forums = await response.json();
      const forumPostsContainer = document.getElementById('forum-posts');

      // Clear existing content
      forumPostsContainer.innerHTML = '';

      forums.forEach(forum => {
        // Create a new forum post element
        const forumPost = document.createElement('div');
        forumPost.className = 'bg-gray-800 p-6 rounded-lg';

        // Create the post content
        forumPost.innerHTML = `
          <div class="flex justify-between items-start">
            <div>
              <h5 class="text-xl font-semibold text-purple-500">${forum.title}</h5>
              <p class="text-gray-400 mt-2">Posted by ${forum.user.full_name}, ${new Date(forum.created_at).toLocaleString()}</p>
            </div>
            <div class="flex space-x-2">
              <button class="flex items-center text-gray-400 hover:text-purple-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M5 15l7-7 7 7" />
                </svg>
                <span>Upvote</span>
              </button>
              <button class="flex items-center text-gray-400 hover:text-purple-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M19 9l-7 7-7-7" />
                </svg>
                <span>Downvote</span>
              </button>
            </div>
          </div>
          <p class="text-gray-300 mt-4">${forum.content}</p>

          <!-- Threaded Comments Placeholder -->
          <div class="mt-6 space-y-4">
            ${forum.comments.map(comment => `
              <div class="bg-gray-700 p-4 rounded-lg">
                <p class="text-gray-300"><strong>${comment.user.full_name}</strong>: ${comment.content}</p>
                <p class="text-gray-500 text-sm">${new Date(comment.created_at).toLocaleString()}</p>
              </div>
            `).join('')}
          </div>

          <!-- Reply Form -->
          <div class="mt-6">
            <form action="../../controllers/forum/postComment.php" method="POST">
              <input type="hidden" name="forum_id" value="${forum.id}">
              <textarea name="content" class="w-full bg-gray-700 p-3 text-base rounded-lg text-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-600" rows="3" placeholder="Add a reply..." required></textarea>
              <button type="submit" class="mt-4 px-6 py-2 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-full transition-all">Reply</button>
            </form>
          </div>
        `;

        // Append the new forum post to the container
        forumPostsContainer.appendChild(forumPost);
      });
    } catch (error) {
      console.error('Error fetching forum posts:', error);
    }
  }

  // Fetch posts when the page loads
  document.addEventListener('DOMContentLoaded', fetchForumPosts);
</script>
