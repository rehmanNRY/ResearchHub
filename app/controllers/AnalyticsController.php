<?php
require_once __DIR__ . '/../models/AnalyticsModel.php';

class AnalyticsController {
    private $model;

    public function __construct() {
        $this->model = new AnalyticsModel();
    }

    public function getUserAnalytics($user_id) {
        $analytics = [];

        $analytics['downloads'] = $this->model->getDownloadCounts($user_id);
        $analytics['citations'] = $this->model->getCitationCounts($user_id);
        $analytics['forum_contributions'] = $this->model->getUserForumContributions($user_id);
        $analytics['comments'] = $this->model->getUserComments($user_id);
        $analytics['project_contributions'] = $this->model->getProjectContributions($user_id);
        $analytics['top_cited'] = $this->model->getTopCitedResources($user_id);
        $analytics['top_downloaded'] = $this->model->getTopDownloadedResources($user_id);
        $analytics['activity_timeline'] = $this->model->getUserActivityTimeline($user_id);
        $analytics['contributions_over_time'] = $this->model->getContributionsOverTime($user_id);

        return $analytics;
    }
}
