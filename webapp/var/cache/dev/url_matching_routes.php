<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/jury/analysis' => [[['_route' => 'analysis_index', '_controller' => 'App\\Controller\\Jury\\AnalysisController::indexAction'], null, null, null, false, false, null]],
        '/jury/auditlog' => [[['_route' => 'jury_auditlog', '_controller' => 'App\\Controller\\Jury\\AuditLogController::indexAction'], null, null, null, false, false, null]],
        '/jury/balloons' => [[['_route' => 'jury_balloons', '_controller' => 'App\\Controller\\Jury\\BalloonController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications' => [[['_route' => 'jury_clarifications', '_controller' => 'App\\Controller\\Jury\\ClarificationController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications/send' => [
            [['_route' => 'jury_clarification_new', '_controller' => 'App\\Controller\\Jury\\ClarificationController::composeClarificationAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'jury_clarification_send', '_controller' => 'App\\Controller\\Jury\\ClarificationController::sendAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/jury/config' => [[['_route' => 'jury_config', '_controller' => 'App\\Controller\\Jury\\ConfigController::indexAction'], null, null, null, false, false, null]],
        '/jury/config/check' => [[['_route' => 'jury_config_check', '_controller' => 'App\\Controller\\Jury\\ConfigController::checkAction'], null, null, null, false, false, null]],
        '/jury/contests' => [[['_route' => 'jury_contests', '_controller' => 'App\\Controller\\Jury\\ContestController::indexAction'], null, null, null, false, false, null]],
        '/jury/contests/add' => [[['_route' => 'jury_contest_add', '_controller' => 'App\\Controller\\Jury\\ContestController::addAction'], null, null, null, false, false, null]],
        '/jury/quizzes/create' => [[['_route' => 'jury_create_quiz', '_controller' => 'App\\Controller\\Jury\\CreateQuizController::renderQuiz'], null, ['GET' => 0], null, false, false, null]],
        '/jury/executables' => [[['_route' => 'jury_executables', '_controller' => 'App\\Controller\\Jury\\ExecutableController::indexAction'], null, null, null, false, false, null]],
        '/jury/executables/add' => [[['_route' => 'jury_executable_add', '_controller' => 'App\\Controller\\Jury\\ExecutableController::addAction'], null, null, null, false, false, null]],
        '/jury/external-contest' => [[['_route' => 'jury_external_contest', '_controller' => 'App\\Controller\\Jury\\ExternalContestController::indexAction'], null, null, null, true, false, null]],
        '/jury/external-contest/manage' => [[['_route' => 'jury_external_contest_manage', '_controller' => 'App\\Controller\\Jury\\ExternalContestController::manageAction'], null, null, null, false, false, null]],
        '/jury/import-export' => [[['_route' => 'jury_import_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::indexAction'], null, null, null, false, false, null]],
        '/jury/internal-errors' => [[['_route' => 'jury_internal_errors', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts' => [[['_route' => 'jury_judgehosts', '_controller' => 'App\\Controller\\Jury\\JudgehostController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts/edit/multiple' => [[['_route' => 'jury_judgehost_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostController::editMultipleAction'], null, null, null, false, false, null]],
        '/jury' => [[['_route' => 'jury_index', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::indexAction'], null, null, null, false, false, null]],
        '/jury/updates' => [[['_route' => 'jury_ajax_updates', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::updatesAction'], null, ['GET' => 0], null, false, false, null]],
        '/jury/refresh-cache' => [[['_route' => 'jury_refresh_cache', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::refreshCacheAction'], null, null, null, false, false, null]],
        '/jury/judging-verifier' => [[['_route' => 'jury_judging_verifier', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::judgingVerifierAction'], null, null, null, false, false, null]],
        '/jury/languages' => [[['_route' => 'jury_languages', '_controller' => 'App\\Controller\\Jury\\LanguageController::indexAction'], null, null, null, false, false, null]],
        '/jury/languages/add' => [[['_route' => 'jury_language_add', '_controller' => 'App\\Controller\\Jury\\LanguageController::addAction'], null, null, null, false, false, null]],
        '/jury/print' => [[['_route' => 'jury_print', '_controller' => 'App\\Controller\\Jury\\PrintController::showAction'], null, null, null, false, false, null]],
        '/jury/problems' => [[['_route' => 'jury_problems', '_controller' => 'App\\Controller\\Jury\\ProblemController::indexAction'], null, null, null, false, false, null]],
        '/jury/problems/add' => [[['_route' => 'jury_problem_add', '_controller' => 'App\\Controller\\Jury\\ProblemController::addAction'], null, null, null, false, false, null]],
        '/jury/queuetasks' => [[['_route' => 'jury_queue_tasks', '_controller' => 'App\\Controller\\Jury\\QueueTaskController::indexAction'], null, null, null, false, false, null]],
        '/jury/rejudgings' => [[['_route' => 'jury_rejudgings', '_controller' => 'App\\Controller\\Jury\\RejudgingController::indexAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/add' => [[['_route' => 'jury_rejudging_add', '_controller' => 'App\\Controller\\Jury\\RejudgingController::addAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/create' => [[['_route' => 'jury_create_rejudge', '_controller' => 'App\\Controller\\Jury\\RejudgingController::createAction'], null, ['POST' => 0], null, false, false, null]],
        '/jury/scoreboard' => [[['_route' => 'jury_scoreboard', '_controller' => 'App\\Controller\\Jury\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/jury/shadow-differences' => [[['_route' => 'jury_shadow_differences', '_controller' => 'App\\Controller\\Jury\\ShadowDifferencesController::indexAction'], null, null, null, false, false, null]],
        '/jury/submissions' => [[['_route' => 'jury_submissions', '_controller' => 'App\\Controller\\Jury\\SubmissionController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations' => [[['_route' => 'jury_team_affiliations', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations/add' => [[['_route' => 'jury_team_affiliation_add', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::addAction'], null, null, null, false, false, null]],
        '/jury/categories' => [[['_route' => 'jury_team_categories', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::indexAction'], null, null, null, false, false, null]],
        '/jury/categories/add' => [[['_route' => 'jury_team_category_add', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::addAction'], null, null, null, false, false, null]],
        '/jury/teams' => [[['_route' => 'jury_teams', '_controller' => 'App\\Controller\\Jury\\TeamController::indexAction'], null, null, null, false, false, null]],
        '/jury/teams/add' => [[['_route' => 'jury_team_add', '_controller' => 'App\\Controller\\Jury\\TeamController::addAction'], null, null, null, false, false, null]],
        '/jury/users' => [[['_route' => 'jury_users', '_controller' => 'App\\Controller\\Jury\\UserController::indexAction'], null, null, null, false, false, null]],
        '/jury/users/add' => [[['_route' => 'jury_user_add', '_controller' => 'App\\Controller\\Jury\\UserController::addAction'], null, null, null, false, false, null]],
        '/jury/users/generate-passwords' => [[['_route' => 'jury_generate_passwords', '_controller' => 'App\\Controller\\Jury\\UserController::generatePasswordsAction'], null, null, null, false, false, null]],
        '/jury/users/reset_login_status' => [[['_route' => 'jury_reset_login_status', '_controller' => 'App\\Controller\\Jury\\UserController::resetTeamLoginStatus'], null, null, null, false, false, null]],
        '/public' => [[['_route' => 'public_index', '_controller' => 'App\\Controller\\PublicController::scoreboardAction'], null, null, null, false, false, null]],
        '/public/scoreboard-data.zip' => [[['_route' => 'public_scoreboard_data_zip', '_controller' => 'App\\Controller\\PublicController::scoreboardDataZipAction'], null, null, null, false, false, null]],
        '/public/problems' => [[['_route' => 'public_problems', '_controller' => 'App\\Controller\\PublicController::problemsAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::redirectAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::registerAction'], null, null, null, false, false, null]],
        '/team/clarifications/add' => [[['_route' => 'team_clarification_add', '_controller' => 'App\\Controller\\Team\\ClarificationController::addAction'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team_index', '_controller' => 'App\\Controller\\Team\\MiscController::homeAction'], null, null, null, false, false, null]],
        '/team/print' => [[['_route' => 'team_print', '_controller' => 'App\\Controller\\Team\\MiscController::printAction'], null, null, null, false, false, null]],
        '/team/docs' => [[['_route' => 'team_docs', '_controller' => 'App\\Controller\\Team\\MiscController::docsAction'], null, null, null, false, false, null]],
        '/team/problems' => [[['_route' => 'team_problems', '_controller' => 'App\\Controller\\Team\\ProblemController::problemsAction'], null, null, null, false, false, null]],
        '/team/scoreboard' => [[['_route' => 'team_scoreboard', '_controller' => 'App\\Controller\\Team\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/api/v4/contests' => [
            [['_route' => 'v4_app_api_contest_addcontest', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_contest_list', '_controller' => 'App\\Controller\\API\\ContestController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v4/version' => [[['_route' => 'v4_app_api_generalinfo_getversion', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/info' => [[['_route' => 'v4_app_api_generalinfo_getinfo', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4' => [[['_route' => 'v4_api_root', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
        '/api/v4/status' => [[['_route' => 'v4_app_api_generalinfo_getstatus', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/user' => [[['_route' => 'v4_app_api_generalinfo_getuser', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/config' => [
            [['_route' => 'v4_app_api_generalinfo_getdatabaseconfiguration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_generalinfo_updateconfiguration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::updateConfigurationAction', '_format' => 'json'], null, ['PUT' => 0], null, false, false, null],
        ],
        '/api/v4/config/check' => [[['_route' => 'v4_app_api_generalinfo_getconfigcheck', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/problems' => [[['_route' => 'v4_app_api_generalinfo_addproblem', '_controller' => 'App\\Controller\\API\\GeneralInfoController::addProblemAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/judgehosts' => [
            [['_route' => 'v4_app_api_judgehost_getjudgehosts', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_judgehost_createjudgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v4/judgements' => [[['_route' => 'v4_app_api_judgement_list_1', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/languages' => [[['_route' => 'v4_app_api_language_list', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/metrics/prometheus' => [[['_route' => 'v4_app_api_metrics_prometheus', '_controller' => 'App\\Controller\\API\\MetricsController::prometheusAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/organizations' => [
            [['_route' => 'v4_app_api_organization_list_1', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_organization_add_1', '_controller' => 'App\\Controller\\API\\OrganizationController::addAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v4/submissions' => [[['_route' => 'v4_app_api_submission_list', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/teams' => [
            [['_route' => 'v4_app_api_team_list_1', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_team_add_1', '_controller' => 'App\\Controller\\API\\TeamController::addAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v4/users/groups' => [[['_route' => 'v4_app_api_user_addgroups', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addGroupsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/organizations' => [[['_route' => 'v4_app_api_user_addorganizations', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addOrganizationsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/teams' => [[['_route' => 'v4_app_api_user_addteams', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/accounts' => [[['_route' => 'v4_app_api_user_addaccounts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users' => [
            [['_route' => 'v4_app_api_user_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::listAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_user_add', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/contests' => [
            [['_route' => 'current_app_api_contest_addcontest', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'current_app_api_contest_list', '_controller' => 'App\\Controller\\API\\ContestController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/version' => [[['_route' => 'current_app_api_generalinfo_getversion', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/info' => [[['_route' => 'current_app_api_generalinfo_getinfo', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api' => [[['_route' => 'current_api_root', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
        '/api/status' => [[['_route' => 'current_app_api_generalinfo_getstatus', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/user' => [[['_route' => 'current_app_api_generalinfo_getuser', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/config' => [
            [['_route' => 'current_app_api_generalinfo_getdatabaseconfiguration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_generalinfo_updateconfiguration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::updateConfigurationAction', '_format' => 'json'], null, ['PUT' => 0], null, false, false, null],
        ],
        '/api/config/check' => [[['_route' => 'current_app_api_generalinfo_getconfigcheck', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/problems' => [[['_route' => 'current_app_api_generalinfo_addproblem', '_controller' => 'App\\Controller\\API\\GeneralInfoController::addProblemAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null]],
        '/api/judgehosts' => [
            [['_route' => 'current_app_api_judgehost_getjudgehosts', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_judgehost_createjudgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/judgements' => [[['_route' => 'current_app_api_judgement_list_1', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/languages' => [[['_route' => 'current_app_api_language_list', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/metrics/prometheus' => [[['_route' => 'current_app_api_metrics_prometheus', '_controller' => 'App\\Controller\\API\\MetricsController::prometheusAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/organizations' => [
            [['_route' => 'current_app_api_organization_list_1', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_organization_add_1', '_controller' => 'App\\Controller\\API\\OrganizationController::addAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/submissions' => [[['_route' => 'current_app_api_submission_list', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/teams' => [
            [['_route' => 'current_app_api_team_list_1', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_team_add_1', '_controller' => 'App\\Controller\\API\\TeamController::addAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/users/groups' => [[['_route' => 'current_app_api_user_addgroups', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addGroupsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/organizations' => [[['_route' => 'current_app_api_user_addorganizations', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addOrganizationsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/teams' => [[['_route' => 'current_app_api_user_addteams', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/accounts' => [[['_route' => 'current_app_api_user_addaccounts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/users' => [
            [['_route' => 'current_app_api_user_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::listAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_user_add', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                .')'
                .'|/jury/(?'
                    .'|a(?'
                        .'|nalysis/(?'
                            .'|team/([^/]++)(*:171)'
                            .'|problem/([^/]++)(*:195)'
                        .')'
                        .'|jax/([^/]++)(*:216)'
                        .'|ffiliations/(?'
                            .'|(\\d+)(*:244)'
                            .'|(\\d+)/edit(*:262)'
                            .'|(\\d+)/delete(*:282)'
                        .')'
                    .')'
                    .'|balloons/([^/]++)/done(*:314)'
                    .'|c(?'
                        .'|larifications/(?'
                            .'|(\\d+)(*:348)'
                            .'|(\\d+)/claim(*:367)'
                            .'|(\\d+)/set\\-answered(*:394)'
                            .'|(\\d+)/change\\-subject(*:423)'
                            .'|(\\d+)/change\\-queue(*:450)'
                        .')'
                        .'|ontests/(?'
                            .'|(\\d+)(*:475)'
                            .'|([^/]++)/toggle\\-submit(*:506)'
                            .'|(\\d+)/remove\\-interval/([^/]++)(*:545)'
                            .'|(\\d+)/edit(*:563)'
                            .'|(\\d+)/delete(*:583)'
                            .'|(\\d+)/problems/(\\d+)/delete(*:618)'
                            .'|(\\d+)/prefetch(*:640)'
                            .'|(\\d+)/finalize(*:662)'
                            .'|(\\d+)/request\\-remaining(*:694)'
                            .'|(\\d+)/problems/(\\d+)/request\\-remaining(*:741)'
                            .'|(\\d+)/lock(*:759)'
                            .'|(\\d+)/unlock(*:779)'
                            .'|(\\d+)/samples\\.zip(*:805)'
                        .')'
                        .'|hange\\-contest/(-?\\d+)(*:836)'
                        .'|ategories/(?'
                            .'|(\\d+)(*:862)'
                            .'|(\\d+)/edit(*:880)'
                            .'|(\\d+)/delete(*:900)'
                            .'|(\\d+)/request\\-remaining(*:932)'
                        .')'
                    .')'
                    .'|executables/([^/]++)(?'
                        .'|(*:965)'
                        .'|/d(?'
                            .'|ownload(?'
                                .'|(*:988)'
                                .'|/([^/]++)(*:1005)'
                            .')'
                            .'|elete(?'
                                .'|/([^/]++)(*:1032)'
                                .'|(*:1041)'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export/export/(?'
                            .'|(groups|teams|results)\\.tsv(*:1108)'
                            .'|(results|clarifications)\\.html(*:1147)'
                        .')'
                        .'|nternal\\-errors/(?'
                            .'|(\\d+)(*:1181)'
                            .'|(\\d+)/(ignore|resolve)(*:1212)'
                        .')'
                    .')'
                    .'|judgehosts/(?'
                        .'|([^/]++)(?'
                            .'|(*:1248)'
                            .'|/(?'
                                .'|d(?'
                                    .'|elete(*:1270)'
                                    .'|isable(*:1285)'
                                .')'
                                .'|enable(*:1301)'
                            .')'
                        .')'
                        .'|enable\\-all(*:1323)'
                        .'|disable\\-all(*:1344)'
                        .'|autohide(*:1361)'
                    .')'
                    .'|languages/([^/]++)(?'
                        .'|(*:1392)'
                        .'|/(?'
                            .'|toggle\\-(?'
                                .'|submit(*:1422)'
                                .'|judge(*:1436)'
                            .')'
                            .'|edit(*:1450)'
                            .'|delete(*:1465)'
                            .'|request\\-remaining(*:1492)'
                        .')'
                    .')'
                    .'|problems/(?'
                        .'|(\\d+)/export(*:1527)'
                        .'|(\\d+)(*:1541)'
                        .'|(\\d+)/text(*:1560)'
                        .'|(\\d+)/testcases(*:1584)'
                        .'|(\\d+)/testcases/(\\d+)/move/(up|down)(*:1629)'
                        .'|(\\d+)/testcases/(\\d+)/fetch/(input|output|image)(*:1686)'
                        .'|(\\d+)/edit(*:1705)'
                        .'|(\\d+)/delete(*:1726)'
                        .'|attachments/(?'
                            .'|(\\d+)(*:1755)'
                            .'|(\\d+)/delete(*:1776)'
                        .')'
                        .'|(\\d+)/delete_testcase(*:1807)'
                        .'|(\\d+)/request\\-remaining(*:1840)'
                    .')'
                    .'|queuetasks/([^/]++)/(?'
                        .'|change\\-priority/([^/]++)(*:1898)'
                        .'|judgetasks(*:1917)'
                    .')'
                    .'|rejudgings/(?'
                        .'|(\\d+)(*:1946)'
                        .'|(\\d+)/(cancel|apply)(*:1975)'
                    .')'
                    .'|submissions/(?'
                        .'|(\\d+)(*:2005)'
                        .'|request\\-(?'
                            .'|full\\-debug/([^/]++)(*:2046)'
                            .'|output/([^/]++)/([^/]++)(*:2079)'
                        .')'
                        .'|download\\-full\\-debug/([^/]++)(*:2119)'
                        .'|by\\-(?'
                            .'|judging\\-id/([^/]++)(*:2155)'
                            .'|external\\-(?'
                                .'|judgement\\-id/([^/]++)(*:2199)'
                                .'|id/([^/]++)(*:2219)'
                            .')'
                        .')'
                        .'|([^/]++)/(?'
                            .'|runs/([^/]++)/([^/]++)/team\\-output(*:2277)'
                            .'|source(*:2292)'
                            .'|edit\\-source(*:2313)'
                        .')'
                        .'|(\\d+)/request\\-remaining(*:2347)'
                        .'|(\\d+)/update\\-status(*:2376)'
                        .'|(\\d+)/verify(*:2397)'
                        .'|shadow\\-difference/(\\d+)/verify(*:2437)'
                        .'|(\\d+)/create\\-tasks(*:2465)'
                    .')'
                    .'|teams/(?'
                        .'|(\\d+)(*:2489)'
                        .'|(\\d+)/edit(*:2508)'
                        .'|(\\d+)/delete(*:2529)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)(*:2553)'
                        .'|(\\d+)/edit(*:2572)'
                        .'|(\\d+)/delete(*:2593)'
                    .')'
                .')'
                .'|/public/(?'
                    .'|change\\-contest/(-?\\d+)(*:2638)'
                    .'|team/(\\d+)(*:2657)'
                    .'|problems/(\\d+)/text(*:2685)'
                    .'|(\\d+)/attachment/(\\d+)(*:2716)'
                    .'|(\\d+)/samples\\.zip(*:2743)'
                .')'
                .'|/team/(?'
                    .'|c(?'
                        .'|larifications/(\\d+)(*:2785)'
                        .'|hange\\-contest/(-?\\d+)(*:2816)'
                    .')'
                    .'|problems/(\\d+)/text(*:2845)'
                    .'|(\\d+)/attachment/(\\d+)(*:2876)'
                    .'|(\\d+)/samples\\.zip(*:2903)'
                    .'|team/(\\d+)(*:2922)'
                    .'|submi(?'
                        .'|t(?:/([^/]++))?(*:2954)'
                        .'|ssion/(?'
                            .'|(\\d+)(*:2977)'
                            .'|(\\d+)/download(*:3000)'
                        .')'
                    .')'
                .')'
                .'|/api/(?'
                    .'|v4/(?'
                        .'|co(?'
                            .'|ntests/([^/]++)(?'
                                .'|/(?'
                                    .'|a(?'
                                        .'|cc(?'
                                            .'|ess(*:3065)'
                                            .'|ount(?'
                                                .'|s(?'
                                                    .'|(*:3085)'
                                                    .'|/([^/]++)(*:3103)'
                                                .')'
                                                .'|(*:3113)'
                                            .')'
                                        .')'
                                        .'|wards(?'
                                            .'|(*:3132)'
                                            .'|/([^/]++)(*:3150)'
                                        .')'
                                    .')'
                                    .'|ba(?'
                                        .'|lloons(?'
                                            .'|(*:3175)'
                                            .'|/(\\d+)/done(*:3195)'
                                        .')'
                                        .'|nner(?'
                                            .'|(*:3212)'
                                        .')'
                                    .')'
                                    .'|c(?'
                                        .'|larifications(?'
                                            .'|(*:3243)'
                                            .'|/([^/]++)(?'
                                                .'|(*:3264)'
                                            .')'
                                            .'|(*:3274)'
                                        .')'
                                        .'|ontest\\-yaml(*:3296)'
                                    .')'
                                    .'|s(?'
                                        .'|tat(?'
                                            .'|e(*:3317)'
                                            .'|us(*:3328)'
                                        .')'
                                        .'|amples\\.zip(*:3349)'
                                        .'|coreboard(*:3367)'
                                        .'|ubmissions(?'
                                            .'|(*:3389)'
                                            .'|/([^/]++)(?'
                                                .'|(*:3410)'
                                                .'|/(?'
                                                    .'|files(*:3428)'
                                                    .'|source\\-code(*:3449)'
                                                .')'
                                            .')'
                                            .'|(*:3460)'
                                        .')'
                                    .')'
                                    .'|event\\-feed(*:3482)'
                                    .'|groups(?'
                                        .'|(*:3500)'
                                        .'|/([^/]++)(*:3518)'
                                        .'|(*:3527)'
                                    .')'
                                    .'|judgement(?'
                                        .'|s(?'
                                            .'|(*:3553)'
                                            .'|/(\\d+)(*:3568)'
                                        .')'
                                        .'|\\-types(?'
                                            .'|(*:3588)'
                                            .'|/([^/]++)(*:3606)'
                                        .')'
                                    .')'
                                    .'|languages(?'
                                        .'|(*:3629)'
                                        .'|/([^/]++)(*:3647)'
                                    .')'
                                    .'|organizations(?'
                                        .'|(*:3673)'
                                        .'|/([^/]++)(?'
                                            .'|(*:3694)'
                                            .'|/logo(?'
                                                .'|(*:3711)'
                                            .')'
                                        .')'
                                        .'|(*:3722)'
                                    .')'
                                    .'|problems(?'
                                        .'|/(?'
                                            .'|add\\-data(*:3756)'
                                            .'|([^/]++)(?'
                                                .'|(*:3776)'
                                                .'|/statement(*:3795)'
                                            .')'
                                        .')'
                                        .'|(*:3806)'
                                    .')'
                                    .'|runs(?'
                                        .'|(*:3823)'
                                        .'|/(\\d+)(*:3838)'
                                    .')'
                                    .'|teams(?'
                                        .'|(*:3856)'
                                        .'|/([^/]++)(?'
                                            .'|(*:3877)'
                                            .'|/photo(?'
                                                .'|(*:3895)'
                                            .')'
                                        .')'
                                        .'|(*:3906)'
                                    .')'
                                .')'
                                .'|(*:3917)'
                            .')'
                            .'|untry\\-flags/([^/]++)/([^/]++)(*:3957)'
                        .')'
                        .'|executables/([^/]++)(*:3987)'
                        .'|judge(?'
                            .'|hosts/(?'
                                .'|([^/]++)(*:4021)'
                                .'|update\\-judging/([^/]++)/(\\d+)(*:4060)'
                                .'|add\\-(?'
                                    .'|debug\\-info/([^/]++)/(\\d+)(*:4103)'
                                    .'|judging\\-run/([^/]++)/(\\d+)(*:4139)'
                                .')'
                                .'|internal\\-error(*:4164)'
                                .'|get_files/([^/]++)/(\\d+)(*:4197)'
                                .'|fetch\\-work(*:4217)'
                            .')'
                            .'|ments/(\\d+)(*:4238)'
                        .')'
                        .'|languages/([^/]++)(*:4266)'
                        .'|organizations/([^/]++)(?'
                            .'|(*:4300)'
                            .'|/logo(?'
                                .'|(*:4317)'
                            .')'
                        .')'
                        .'|submissions/([^/]++)(?'
                            .'|(*:4351)'
                            .'|/files(*:4366)'
                        .')'
                        .'|teams/([^/]++)(?'
                            .'|(*:4393)'
                            .'|/photo(?'
                                .'|(*:4411)'
                            .')'
                        .')'
                        .'|users/([^/]++)(*:4436)'
                    .')'
                    .'|co(?'
                        .'|ntests/([^/]++)(?'
                            .'|/(?'
                                .'|a(?'
                                    .'|cc(?'
                                        .'|ess(*:4485)'
                                        .'|ount(?'
                                            .'|s(?'
                                                .'|(*:4505)'
                                                .'|/([^/]++)(*:4523)'
                                            .')'
                                            .'|(*:4533)'
                                        .')'
                                    .')'
                                    .'|wards(?'
                                        .'|(*:4552)'
                                        .'|/([^/]++)(*:4570)'
                                    .')'
                                .')'
                                .'|ba(?'
                                    .'|lloons(?'
                                        .'|(*:4595)'
                                        .'|/(\\d+)/done(*:4615)'
                                    .')'
                                    .'|nner(?'
                                        .'|(*:4632)'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|larifications(?'
                                        .'|(*:4663)'
                                        .'|/([^/]++)(?'
                                            .'|(*:4684)'
                                        .')'
                                        .'|(*:4694)'
                                    .')'
                                    .'|ontest\\-yaml(*:4716)'
                                .')'
                                .'|s(?'
                                    .'|tat(?'
                                        .'|e(*:4737)'
                                        .'|us(*:4748)'
                                    .')'
                                    .'|amples\\.zip(*:4769)'
                                    .'|coreboard(*:4787)'
                                    .'|ubmissions(?'
                                        .'|(*:4809)'
                                        .'|/([^/]++)(?'
                                            .'|(*:4830)'
                                            .'|/(?'
                                                .'|files(*:4848)'
                                                .'|source\\-code(*:4869)'
                                            .')'
                                        .')'
                                        .'|(*:4880)'
                                    .')'
                                .')'
                                .'|event\\-feed(*:4902)'
                                .'|groups(?'
                                    .'|(*:4920)'
                                    .'|/([^/]++)(*:4938)'
                                    .'|(*:4947)'
                                .')'
                                .'|judgement(?'
                                    .'|s(?'
                                        .'|(*:4973)'
                                        .'|/(\\d+)(*:4988)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(*:5008)'
                                        .'|/([^/]++)(*:5026)'
                                    .')'
                                .')'
                                .'|languages(?'
                                    .'|(*:5049)'
                                    .'|/([^/]++)(*:5067)'
                                .')'
                                .'|organizations(?'
                                    .'|(*:5093)'
                                    .'|/([^/]++)(?'
                                        .'|(*:5114)'
                                        .'|/logo(?'
                                            .'|(*:5131)'
                                        .')'
                                    .')'
                                    .'|(*:5142)'
                                .')'
                                .'|problems(?'
                                    .'|/(?'
                                        .'|add\\-data(*:5176)'
                                        .'|([^/]++)(?'
                                            .'|(*:5196)'
                                            .'|/statement(*:5215)'
                                        .')'
                                    .')'
                                    .'|(*:5226)'
                                .')'
                                .'|runs(?'
                                    .'|(*:5243)'
                                    .'|/(\\d+)(*:5258)'
                                .')'
                                .'|teams(?'
                                    .'|(*:5276)'
                                    .'|/([^/]++)(?'
                                        .'|(*:5297)'
                                        .'|/photo(?'
                                            .'|(*:5315)'
                                        .')'
                                    .')'
                                    .'|(*:5326)'
                                .')'
                            .')'
                            .'|(*:5337)'
                        .')'
                        .'|untry\\-flags/([^/]++)/([^/]++)(*:5377)'
                    .')'
                    .'|executables/([^/]++)(*:5407)'
                    .'|judge(?'
                        .'|hosts/(?'
                            .'|([^/]++)(*:5441)'
                            .'|update\\-judging/([^/]++)/(\\d+)(*:5480)'
                            .'|add\\-(?'
                                .'|debug\\-info/([^/]++)/(\\d+)(*:5523)'
                                .'|judging\\-run/([^/]++)/(\\d+)(*:5559)'
                            .')'
                            .'|internal\\-error(*:5584)'
                            .'|get_files/([^/]++)/(\\d+)(*:5617)'
                            .'|fetch\\-work(*:5637)'
                        .')'
                        .'|ments/(\\d+)(*:5658)'
                    .')'
                    .'|languages/([^/]++)(*:5686)'
                    .'|organizations/([^/]++)(?'
                        .'|(*:5720)'
                        .'|/logo(?'
                            .'|(*:5737)'
                        .')'
                    .')'
                    .'|submissions/([^/]++)(?'
                        .'|(*:5771)'
                        .'|/files(*:5786)'
                    .')'
                    .'|teams/([^/]++)(?'
                        .'|(*:5813)'
                        .'|/photo(?'
                            .'|(*:5831)'
                        .')'
                    .')'
                    .'|users/([^/]++)(*:5856)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        171 => [[['_route' => 'analysis_team', '_controller' => 'App\\Controller\\Jury\\AnalysisController::teamAction'], ['teamid'], null, null, false, true, null]],
        195 => [[['_route' => 'analysis_problem', '_controller' => 'App\\Controller\\Jury\\AnalysisController::problemAction'], ['probid'], null, null, false, true, null]],
        216 => [[['_route' => 'jury_ajax_data', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::ajaxDataAction'], ['datatype'], ['GET' => 0], null, false, true, null]],
        244 => [[['_route' => 'jury_team_affiliation', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::viewAction'], ['affilId'], null, null, false, true, null]],
        262 => [[['_route' => 'jury_team_affiliation_edit', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::editAction'], ['affilId'], null, null, false, false, null]],
        282 => [[['_route' => 'jury_team_affiliation_delete', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::deleteAction'], ['affilId'], null, null, false, false, null]],
        314 => [[['_route' => 'jury_balloons_setdone', '_controller' => 'App\\Controller\\Jury\\BalloonController::setDoneAction'], ['balloonId'], null, null, false, false, null]],
        348 => [[['_route' => 'jury_clarification', '_controller' => 'App\\Controller\\Jury\\ClarificationController::viewAction'], ['id'], null, null, false, true, null]],
        367 => [[['_route' => 'jury_clarification_claim', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleClaimAction'], ['clarId'], null, null, false, false, null]],
        394 => [[['_route' => 'jury_clarification_set_answered', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleAnsweredAction'], ['clarId'], null, null, false, false, null]],
        423 => [[['_route' => 'jury_clarification_change_subject', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeSubjectAction'], ['clarId'], null, null, false, false, null]],
        450 => [[['_route' => 'jury_clarification_change_queue', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeQueueAction'], ['clarId'], null, null, false, false, null]],
        475 => [[['_route' => 'jury_contest', '_controller' => 'App\\Controller\\Jury\\ContestController::viewAction'], ['contestId'], null, null, false, true, null]],
        506 => [[['_route' => 'jury_contest_toggle_submit', '_controller' => 'App\\Controller\\Jury\\ContestController::toggleSubmitAction'], ['contestId'], null, null, false, false, null]],
        545 => [[['_route' => 'jury_contest_remove_interval', '_controller' => 'App\\Controller\\Jury\\ContestController::removeIntervalAction'], ['contestId', 'intervalId'], ['POST' => 0], null, false, true, null]],
        563 => [[['_route' => 'jury_contest_edit', '_controller' => 'App\\Controller\\Jury\\ContestController::editAction'], ['contestId'], null, null, false, false, null]],
        583 => [[['_route' => 'jury_contest_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteAction'], ['contestId'], null, null, false, false, null]],
        618 => [[['_route' => 'jury_contest_problem_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteProblemAction'], ['contestId', 'probId'], null, null, false, false, null]],
        640 => [[['_route' => 'jury_contest_prefetch', '_controller' => 'App\\Controller\\Jury\\ContestController::prefetchAction'], ['contestId'], null, null, false, false, null]],
        662 => [[['_route' => 'jury_contest_finalize', '_controller' => 'App\\Controller\\Jury\\ContestController::finalizeAction'], ['contestId'], null, null, false, false, null]],
        694 => [[['_route' => 'jury_contest_request_remaining', '_controller' => 'App\\Controller\\Jury\\ContestController::requestRemainingRunsWholeContestAction'], ['contestId'], null, null, false, false, null]],
        741 => [[['_route' => 'jury_contest_problem_request_remaining', '_controller' => 'App\\Controller\\Jury\\ContestController::requestRemainingRunsContestProblemAction'], ['contestId', 'probId'], null, null, false, false, null]],
        759 => [[['_route' => 'jury_contest_lock', '_controller' => 'App\\Controller\\Jury\\ContestController::lockAction'], ['contestId'], null, null, false, false, null]],
        779 => [[['_route' => 'jury_contest_unlock', '_controller' => 'App\\Controller\\Jury\\ContestController::unlockAction'], ['contestId'], null, null, false, false, null]],
        805 => [[['_route' => 'jury_contest_samples_data_zip', '_controller' => 'App\\Controller\\Jury\\ContestController::samplesDataZipAction'], ['contestId'], null, null, false, false, null]],
        836 => [[['_route' => 'jury_change_contest', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        862 => [[['_route' => 'jury_team_category', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::viewAction'], ['categoryId'], null, null, false, true, null]],
        880 => [[['_route' => 'jury_team_category_edit', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::editAction'], ['categoryId'], null, null, false, false, null]],
        900 => [[['_route' => 'jury_team_category_delete', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::deleteAction'], ['categoryId'], null, null, false, false, null]],
        932 => [[['_route' => 'jury_team_category_request_remaining', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::requestRemainingRunsWholeTeamCategoryAction'], ['categoryId'], null, null, false, false, null]],
        965 => [[['_route' => 'jury_executable', '_controller' => 'App\\Controller\\Jury\\ExecutableController::viewAction'], ['execId'], null, null, false, true, null]],
        988 => [[['_route' => 'jury_executable_download', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadAction'], ['execId'], null, null, false, false, null]],
        1005 => [[['_route' => 'jury_executable_download_single', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadSingleAction'], ['execId', 'rank'], null, null, false, true, null]],
        1032 => [[['_route' => 'jury_executable_delete_single', '_controller' => 'App\\Controller\\Jury\\ExecutableController::deleteSingleAction'], ['execId', 'rankToDelete'], null, null, false, true, null]],
        1041 => [[['_route' => 'jury_executable_delete', '_controller' => 'App\\Controller\\Jury\\ExecutableController::deleteAction'], ['execId'], null, null, false, false, null]],
        1108 => [[['_route' => 'jury_tsv_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportTsvAction'], ['type'], null, null, false, false, null]],
        1147 => [[['_route' => 'jury_html_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportHtmlAction'], ['type'], null, null, false, false, null]],
        1181 => [[['_route' => 'jury_internal_error', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::viewAction'], ['errorId'], ['GET' => 0], null, false, true, null]],
        1212 => [[['_route' => 'jury_internal_error_handle', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::handleAction'], ['errorId', 'action'], ['POST' => 0], null, false, true, null]],
        1248 => [[['_route' => 'jury_judgehost', '_controller' => 'App\\Controller\\Jury\\JudgehostController::viewAction'], ['judgehostid'], ['GET' => 0], null, false, true, null]],
        1270 => [[['_route' => 'jury_judgehost_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deleteAction'], ['judgehostid'], null, null, false, false, null]],
        1285 => [[['_route' => 'jury_judgehost_disable', '_controller' => 'App\\Controller\\Jury\\JudgehostController::disableAction'], ['judgehostid'], null, null, false, false, null]],
        1301 => [[['_route' => 'jury_judgehost_enable', '_controller' => 'App\\Controller\\Jury\\JudgehostController::enableAction'], ['judgehostid'], null, null, false, false, null]],
        1323 => [[['_route' => 'jury_judgehost_enable_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::enableAllAction'], [], ['POST' => 0], null, false, false, null]],
        1344 => [[['_route' => 'jury_judgehost_disable_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::disableAllAction'], [], ['POST' => 0], null, false, false, null]],
        1361 => [[['_route' => 'jury_judgehost_autohide', '_controller' => 'App\\Controller\\Jury\\JudgehostController::autohideInactive'], [], ['POST' => 0], null, false, false, null]],
        1392 => [[['_route' => 'jury_language', '_controller' => 'App\\Controller\\Jury\\LanguageController::viewAction'], ['langId'], null, null, false, true, null]],
        1422 => [[['_route' => 'jury_language_toggle_submit', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleSubmitAction'], ['langId'], null, null, false, false, null]],
        1436 => [[['_route' => 'jury_language_toggle_judge', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleJudgeAction'], ['langId'], null, null, false, false, null]],
        1450 => [[['_route' => 'jury_language_edit', '_controller' => 'App\\Controller\\Jury\\LanguageController::editAction'], ['langId'], null, null, false, false, null]],
        1465 => [[['_route' => 'jury_language_delete', '_controller' => 'App\\Controller\\Jury\\LanguageController::deleteAction'], ['langId'], null, null, false, false, null]],
        1492 => [[['_route' => 'jury_language_request_remaining', '_controller' => 'App\\Controller\\Jury\\LanguageController::requestRemainingRunsWholeLanguageAction'], ['langId'], null, null, false, false, null]],
        1527 => [[['_route' => 'jury_export_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::exportAction'], ['problemId'], null, null, false, false, null]],
        1541 => [[['_route' => 'jury_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewAction'], ['probId'], null, null, false, true, null]],
        1560 => [[['_route' => 'jury_problem_text', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewTextAction'], ['probId'], null, null, false, false, null]],
        1584 => [[['_route' => 'jury_problem_testcases', '_controller' => 'App\\Controller\\Jury\\ProblemController::testcasesAction'], ['probId'], null, null, false, false, null]],
        1629 => [[['_route' => 'jury_problem_testcase_move', '_controller' => 'App\\Controller\\Jury\\ProblemController::moveTestcaseAction'], ['probId', 'rank', 'direction'], null, null, false, true, null]],
        1686 => [[['_route' => 'jury_problem_testcase_fetch', '_controller' => 'App\\Controller\\Jury\\ProblemController::fetchTestcaseAction'], ['probId', 'rank', 'type'], null, null, false, true, null]],
        1705 => [[['_route' => 'jury_problem_edit', '_controller' => 'App\\Controller\\Jury\\ProblemController::editAction'], ['probId'], null, null, false, false, null]],
        1726 => [[['_route' => 'jury_problem_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteAction'], ['probId'], null, null, false, false, null]],
        1755 => [[['_route' => 'jury_attachment_fetch', '_controller' => 'App\\Controller\\Jury\\ProblemController::fetchAttachmentAction'], ['attachmentId'], null, null, false, true, null]],
        1776 => [[['_route' => 'jury_attachment_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteAttachmentAction'], ['attachmentId'], null, null, false, false, null]],
        1807 => [[['_route' => 'jury_testcase_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteTestcaseAction'], ['testcaseId'], null, null, false, false, null]],
        1840 => [[['_route' => 'jury_problem_request_remaining', '_controller' => 'App\\Controller\\Jury\\ProblemController::requestRemainingRunsWholeProblemAction'], ['probId'], null, null, false, false, null]],
        1898 => [[['_route' => 'jury_queue_task_change_priority', '_controller' => 'App\\Controller\\Jury\\QueueTaskController::changePriorityAction'], ['queueTaskId', 'priority'], null, null, false, true, null]],
        1917 => [[['_route' => 'jury_queue_task_judge_tasks', '_controller' => 'App\\Controller\\Jury\\QueueTaskController::viewJudgeTasksAction'], ['queueTaskId'], null, null, false, false, null]],
        1946 => [[['_route' => 'jury_rejudging', '_controller' => 'App\\Controller\\Jury\\RejudgingController::viewAction'], ['rejudgingId'], null, null, false, true, null]],
        1975 => [[['_route' => 'jury_rejudging_finish', '_controller' => 'App\\Controller\\Jury\\RejudgingController::finishAction'], ['rejudgingId', 'action'], null, null, false, true, null]],
        2005 => [[['_route' => 'jury_submission', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null]],
        2046 => [[['_route' => 'request_full_debug', '_controller' => 'App\\Controller\\Jury\\SubmissionController::requestFullDebug'], ['jid'], null, null, false, true, null]],
        2079 => [[['_route' => 'request_output', '_controller' => 'App\\Controller\\Jury\\SubmissionController::requestOutput'], ['jid', 'jrid'], null, null, false, true, null]],
        2119 => [[['_route' => 'download_full_debug', '_controller' => 'App\\Controller\\Jury\\SubmissionController::downloadFullDebug'], ['debug_package_id'], null, null, false, true, null]],
        2155 => [[['_route' => 'jury_submission_by_judging', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForJudgingAction'], ['jid'], null, null, false, true, null]],
        2199 => [[['_route' => 'jury_submission_by_external_judgement', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForExternalJudgementAction'], ['externalJudgement'], null, null, false, true, null]],
        2219 => [[['_route' => 'jury_submission_by_external_id', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForExternalIdAction'], ['externalId'], null, null, false, true, null]],
        2277 => [[['_route' => 'jury_submission_team_output', '_controller' => 'App\\Controller\\Jury\\SubmissionController::teamOutputAction'], ['submission', 'contest', 'run'], null, null, false, false, null]],
        2292 => [[['_route' => 'jury_submission_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::sourceAction'], ['submission'], null, null, false, false, null]],
        2313 => [[['_route' => 'jury_submission_edit_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::editSourceAction'], ['submission'], null, null, false, false, null]],
        2347 => [[['_route' => 'jury_submission_request_remaining', '_controller' => 'App\\Controller\\Jury\\SubmissionController::requestRemainingRuns'], ['judgingId'], ['POST' => 0], null, false, false, null]],
        2376 => [[['_route' => 'jury_submission_update_status', '_controller' => 'App\\Controller\\Jury\\SubmissionController::updateStatusAction'], ['submitId'], ['POST' => 0], null, false, false, null]],
        2397 => [[['_route' => 'jury_judging_verify', '_controller' => 'App\\Controller\\Jury\\SubmissionController::verifyAction'], ['judgingId'], ['POST' => 0], null, false, false, null]],
        2437 => [[['_route' => 'jury_shadow_difference_verify', '_controller' => 'App\\Controller\\Jury\\SubmissionController::verifyShadowDifferenceAction'], ['extjudgementid'], ['POST' => 0], null, false, false, null]],
        2465 => [[['_route' => 'jury_submission_create_tasks', '_controller' => 'App\\Controller\\Jury\\SubmissionController::createJudgeTasks'], ['submitId'], null, null, false, false, null]],
        2489 => [[['_route' => 'jury_team', '_controller' => 'App\\Controller\\Jury\\TeamController::viewAction'], ['teamId'], null, null, false, true, null]],
        2508 => [[['_route' => 'jury_team_edit', '_controller' => 'App\\Controller\\Jury\\TeamController::editAction'], ['teamId'], null, null, false, false, null]],
        2529 => [[['_route' => 'jury_team_delete', '_controller' => 'App\\Controller\\Jury\\TeamController::deleteAction'], ['teamId'], null, null, false, false, null]],
        2553 => [[['_route' => 'jury_user', '_controller' => 'App\\Controller\\Jury\\UserController::viewAction'], ['userId'], null, null, false, true, null]],
        2572 => [[['_route' => 'jury_user_edit', '_controller' => 'App\\Controller\\Jury\\UserController::editAction'], ['userId'], null, null, false, false, null]],
        2593 => [[['_route' => 'jury_user_delete', '_controller' => 'App\\Controller\\Jury\\UserController::deleteAction'], ['userId'], null, null, false, false, null]],
        2638 => [[['_route' => 'public_change_contest', '_controller' => 'App\\Controller\\PublicController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        2657 => [[['_route' => 'public_team', '_controller' => 'App\\Controller\\PublicController::teamAction'], ['teamId'], null, null, false, true, null]],
        2685 => [[['_route' => 'public_problem_text', '_controller' => 'App\\Controller\\PublicController::problemTextAction'], ['probId'], null, null, false, false, null]],
        2716 => [[['_route' => 'public_problem_attachment', '_controller' => 'App\\Controller\\PublicController::attachmentAction'], ['probId', 'attachmentId'], null, null, false, true, null]],
        2743 => [[['_route' => 'public_problem_sample_zip', '_controller' => 'App\\Controller\\PublicController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        2785 => [[['_route' => 'team_clarification', '_controller' => 'App\\Controller\\Team\\ClarificationController::viewAction'], ['clarId'], null, null, false, true, null]],
        2816 => [[['_route' => 'team_change_contest', '_controller' => 'App\\Controller\\Team\\MiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        2845 => [[['_route' => 'team_problem_text', '_controller' => 'App\\Controller\\Team\\ProblemController::problemTextAction'], ['probId'], null, null, false, false, null]],
        2876 => [[['_route' => 'team_problem_attachment', '_controller' => 'App\\Controller\\Team\\ProblemController::attachmentAction'], ['probId', 'attachmentId'], null, null, false, true, null]],
        2903 => [[['_route' => 'team_problem_sample_zip', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        2922 => [[['_route' => 'team_team', '_controller' => 'App\\Controller\\Team\\ScoreboardController::teamAction'], ['teamId'], null, null, false, true, null]],
        2954 => [[['_route' => 'team_submit', 'problem' => null, '_controller' => 'App\\Controller\\Team\\SubmissionController::createAction'], ['problem'], null, null, false, true, null]],
        2977 => [[['_route' => 'team_submission', '_controller' => 'App\\Controller\\Team\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null]],
        3000 => [[['_route' => 'team_submission_download', '_controller' => 'App\\Controller\\Team\\SubmissionController::downloadAction'], ['submitId'], null, null, false, false, null]],
        3065 => [[['_route' => 'v4_app_api_access_getstatus', '_controller' => 'App\\Controller\\API\\AccessController::getStatusAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3085 => [[['_route' => 'v4_app_api_account_list', '_controller' => 'App\\Controller\\API\\AccountController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3103 => [[['_route' => 'v4_app_api_account_single', '_controller' => 'App\\Controller\\API\\AccountController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3113 => [[['_route' => 'v4_app_api_account_getcurrent', '_controller' => 'App\\Controller\\API\\AccountController::getCurrentAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3132 => [[['_route' => 'v4_app_api_awards_list', '_controller' => 'App\\Controller\\API\\AwardsController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3150 => [[['_route' => 'v4_app_api_awards_single', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3175 => [[['_route' => 'v4_app_api_balloon_list', '_controller' => 'App\\Controller\\API\\BalloonController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3195 => [[['_route' => 'v4_app_api_balloon_markdone', '_controller' => 'App\\Controller\\API\\BalloonController::markDoneAction', '_format' => 'json'], ['cid', 'balloonId'], ['POST' => 0], null, false, false, null]],
        3212 => [
            [['_route' => 'v4_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::bannerAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_delete_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::deleteBannerAction', '_format' => 'json'], ['cid'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'v4_post_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::setBannerAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null],
            [['_route' => 'v4_put_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::setBannerAction', '_format' => 'json'], ['cid'], ['PUT' => 0], null, false, false, null],
        ],
        3243 => [[['_route' => 'v4_app_api_clarification_list', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3264 => [
            [['_route' => 'v4_app_api_clarification_single', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'v4_app_api_clarification_add_1', '_controller' => 'App\\Controller\\API\\ClarificationController::addAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
        ],
        3274 => [[['_route' => 'v4_app_api_clarification_add', '_controller' => 'App\\Controller\\API\\ClarificationController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3296 => [[['_route' => 'v4_app_api_contest_getcontestyaml', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3317 => [[['_route' => 'v4_app_api_contest_getconteststate', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3328 => [[['_route' => 'v4_app_api_contest_getstatus', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3349 => [[['_route' => 'v4_samples_data_zip', '_controller' => 'App\\Controller\\API\\ContestController::samplesDataZipAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3367 => [[['_route' => 'v4_app_api_scoreboard_getscoreboard', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3389 => [[['_route' => 'v4_app_api_submission_list_1', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3410 => [
            [['_route' => 'v4_app_api_submission_single_1', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'v4_app_api_submission_addsubmission_1', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
        ],
        3428 => [[['_route' => 'v4_submission_files', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        3449 => [[['_route' => 'v4_app_api_submission_getsubmissionsourcecode', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        3460 => [[['_route' => 'v4_app_api_submission_addsubmission', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3482 => [[['_route' => 'v4_app_api_contest_geteventfeed', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3500 => [[['_route' => 'v4_app_api_group_list', '_controller' => 'App\\Controller\\API\\GroupController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3518 => [[['_route' => 'v4_app_api_group_single', '_controller' => 'App\\Controller\\API\\GroupController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3527 => [[['_route' => 'v4_app_api_group_add', '_controller' => 'App\\Controller\\API\\GroupController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3553 => [[['_route' => 'v4_app_api_judgement_list', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3568 => [[['_route' => 'v4_app_api_judgement_single', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3588 => [[['_route' => 'v4_app_api_judgementtype_list', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3606 => [[['_route' => 'v4_app_api_judgementtype_single', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3629 => [[['_route' => 'v4_app_api_language_list_1', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3647 => [[['_route' => 'v4_app_api_language_single_1', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3673 => [[['_route' => 'v4_app_api_organization_list', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3694 => [[['_route' => 'v4_app_api_organization_single', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3711 => [
            [['_route' => 'v4_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::logoAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_delete_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::deleteLogoAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'v4_post_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['cid', 'id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'v4_put_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, false, null],
        ],
        3722 => [[['_route' => 'v4_app_api_organization_add', '_controller' => 'App\\Controller\\API\\OrganizationController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3756 => [[['_route' => 'v4_app_api_problem_addproblems', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemsAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3776 => [
            [['_route' => 'v4_app_api_problem_unlinkproblem', '_controller' => 'App\\Controller\\API\\ProblemController::unlinkProblemAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'v4_app_api_problem_linkproblem', '_controller' => 'App\\Controller\\API\\ProblemController::linkProblemAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'v4_app_api_problem_single', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
        ],
        3795 => [[['_route' => 'v4_app_api_problem_statement', '_controller' => 'App\\Controller\\API\\ProblemController::statementAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        3806 => [
            [['_route' => 'v4_app_api_problem_list', '_controller' => 'App\\Controller\\API\\ProblemController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_problem_addproblem', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null],
        ],
        3823 => [[['_route' => 'v4_app_api_run_list', '_controller' => 'App\\Controller\\API\\RunController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3838 => [[['_route' => 'v4_app_api_run_single', '_controller' => 'App\\Controller\\API\\RunController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3856 => [[['_route' => 'v4_app_api_team_list', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3877 => [[['_route' => 'v4_app_api_team_single', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3895 => [
            [['_route' => 'v4_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::photoAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_delete_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::deletePhotoAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'v4_post_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['cid', 'id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'v4_put_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, false, null],
        ],
        3906 => [[['_route' => 'v4_app_api_team_add', '_controller' => 'App\\Controller\\API\\TeamController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3917 => [
            [['_route' => 'v4_app_api_contest_single', '_controller' => 'App\\Controller\\API\\ContestController::singleAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'v4_app_api_contest_changestarttime', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction', '_format' => 'json'], ['cid'], ['PATCH' => 0], null, false, true, null],
        ],
        3957 => [[['_route' => 'v4_app_api_generalinfo_countryflag', '_controller' => 'App\\Controller\\API\\GeneralInfoController::countryFlagAction', '_format' => 'json'], ['countryCode', 'size'], ['GET' => 0], null, false, true, null]],
        3987 => [[['_route' => 'v4_app_api_executable_single', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        4021 => [[['_route' => 'v4_app_api_judgehost_updatejudgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction', '_format' => 'json'], ['hostname'], ['PUT' => 0], null, false, true, null]],
        4060 => [[['_route' => 'v4_app_api_judgehost_updatejudging', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction', '_format' => 'json'], ['hostname', 'judgetaskid'], ['PUT' => 0], null, false, true, null]],
        4103 => [[['_route' => 'v4_app_api_judgehost_adddebuginfo', '_controller' => 'App\\Controller\\API\\JudgehostController::addDebugInfo', '_format' => 'json'], ['hostname', 'judgeTaskId'], ['POST' => 0], null, false, true, null]],
        4139 => [[['_route' => 'v4_app_api_judgehost_addjudgingrun', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction', '_format' => 'json'], ['hostname', 'judgeTaskId'], ['POST' => 0], null, false, true, null]],
        4164 => [[['_route' => 'v4_app_api_judgehost_internalerror', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction', '_format' => 'json'], [], ['POST' => 0], null, false, false, null]],
        4197 => [[['_route' => 'v4_app_api_judgehost_getfiles', '_controller' => 'App\\Controller\\API\\JudgehostController::getFilesAction', '_format' => 'json'], ['type', 'id'], ['GET' => 0], null, false, true, null]],
        4217 => [[['_route' => 'v4_app_api_judgehost_getjudgetasks', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgeTasksAction', '_format' => 'json'], [], ['POST' => 0], null, false, false, null]],
        4238 => [[['_route' => 'v4_app_api_judgement_single_1', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        4266 => [[['_route' => 'v4_app_api_language_single', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        4300 => [[['_route' => 'v4_app_api_organization_single_1', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        4317 => [
            [['_route' => 'v4_app_api_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::logoAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_organization_deletelogo', '_controller' => 'App\\Controller\\API\\OrganizationController::deleteLogoAction', '_format' => 'json'], ['id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_organization_setlogo', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_organization_setlogo_1', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['id'], ['PUT' => 0], null, false, false, null],
        ],
        4351 => [[['_route' => 'v4_app_api_submission_single', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        4366 => [[['_route' => 'v4_submission_files_root', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, false, null]],
        4393 => [[['_route' => 'v4_app_api_team_single_1', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        4411 => [
            [['_route' => 'v4_app_api_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::photoAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_team_deletephoto', '_controller' => 'App\\Controller\\API\\TeamController::deletePhotoAction', '_format' => 'json'], ['id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_team_setphoto', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_team_setphoto_1', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['id'], ['PUT' => 0], null, false, false, null],
        ],
        4436 => [[['_route' => 'v4_app_api_user_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        4485 => [[['_route' => 'current_app_api_access_getstatus', '_controller' => 'App\\Controller\\API\\AccessController::getStatusAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4505 => [[['_route' => 'current_app_api_account_list', '_controller' => 'App\\Controller\\API\\AccountController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4523 => [[['_route' => 'current_app_api_account_single', '_controller' => 'App\\Controller\\API\\AccountController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4533 => [[['_route' => 'current_app_api_account_getcurrent', '_controller' => 'App\\Controller\\API\\AccountController::getCurrentAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4552 => [[['_route' => 'current_app_api_awards_list', '_controller' => 'App\\Controller\\API\\AwardsController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4570 => [[['_route' => 'current_app_api_awards_single', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4595 => [[['_route' => 'current_app_api_balloon_list', '_controller' => 'App\\Controller\\API\\BalloonController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4615 => [[['_route' => 'current_app_api_balloon_markdone', '_controller' => 'App\\Controller\\API\\BalloonController::markDoneAction', '_format' => 'json'], ['cid', 'balloonId'], ['POST' => 0], null, false, false, null]],
        4632 => [
            [['_route' => 'current_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::bannerAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'current_delete_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::deleteBannerAction', '_format' => 'json'], ['cid'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'current_post_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::setBannerAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null],
            [['_route' => 'current_put_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::setBannerAction', '_format' => 'json'], ['cid'], ['PUT' => 0], null, false, false, null],
        ],
        4663 => [[['_route' => 'current_app_api_clarification_list', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4684 => [
            [['_route' => 'current_app_api_clarification_single', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'current_app_api_clarification_add_1', '_controller' => 'App\\Controller\\API\\ClarificationController::addAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
        ],
        4694 => [[['_route' => 'current_app_api_clarification_add', '_controller' => 'App\\Controller\\API\\ClarificationController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        4716 => [[['_route' => 'current_app_api_contest_getcontestyaml', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4737 => [[['_route' => 'current_app_api_contest_getconteststate', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4748 => [[['_route' => 'current_app_api_contest_getstatus', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4769 => [[['_route' => 'current_samples_data_zip', '_controller' => 'App\\Controller\\API\\ContestController::samplesDataZipAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4787 => [[['_route' => 'current_app_api_scoreboard_getscoreboard', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4809 => [[['_route' => 'current_app_api_submission_list_1', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4830 => [
            [['_route' => 'current_app_api_submission_single_1', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'current_app_api_submission_addsubmission_1', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
        ],
        4848 => [[['_route' => 'current_submission_files', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        4869 => [[['_route' => 'current_app_api_submission_getsubmissionsourcecode', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        4880 => [[['_route' => 'current_app_api_submission_addsubmission', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        4902 => [[['_route' => 'current_app_api_contest_geteventfeed', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4920 => [[['_route' => 'current_app_api_group_list', '_controller' => 'App\\Controller\\API\\GroupController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4938 => [[['_route' => 'current_app_api_group_single', '_controller' => 'App\\Controller\\API\\GroupController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4947 => [[['_route' => 'current_app_api_group_add', '_controller' => 'App\\Controller\\API\\GroupController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        4973 => [[['_route' => 'current_app_api_judgement_list', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4988 => [[['_route' => 'current_app_api_judgement_single', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        5008 => [[['_route' => 'current_app_api_judgementtype_list', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        5026 => [[['_route' => 'current_app_api_judgementtype_single', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        5049 => [[['_route' => 'current_app_api_language_list_1', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        5067 => [[['_route' => 'current_app_api_language_single_1', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        5093 => [[['_route' => 'current_app_api_organization_list', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        5114 => [[['_route' => 'current_app_api_organization_single', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        5131 => [
            [['_route' => 'current_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::logoAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'current_delete_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::deleteLogoAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'current_post_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['cid', 'id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'current_put_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, false, null],
        ],
        5142 => [[['_route' => 'current_app_api_organization_add', '_controller' => 'App\\Controller\\API\\OrganizationController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        5176 => [[['_route' => 'current_app_api_problem_addproblems', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemsAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        5196 => [
            [['_route' => 'current_app_api_problem_unlinkproblem', '_controller' => 'App\\Controller\\API\\ProblemController::unlinkProblemAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'current_app_api_problem_linkproblem', '_controller' => 'App\\Controller\\API\\ProblemController::linkProblemAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'current_app_api_problem_single', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
        ],
        5215 => [[['_route' => 'current_app_api_problem_statement', '_controller' => 'App\\Controller\\API\\ProblemController::statementAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        5226 => [
            [['_route' => 'current_app_api_problem_list', '_controller' => 'App\\Controller\\API\\ProblemController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_problem_addproblem', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null],
        ],
        5243 => [[['_route' => 'current_app_api_run_list', '_controller' => 'App\\Controller\\API\\RunController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        5258 => [[['_route' => 'current_app_api_run_single', '_controller' => 'App\\Controller\\API\\RunController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        5276 => [[['_route' => 'current_app_api_team_list', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        5297 => [[['_route' => 'current_app_api_team_single', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        5315 => [
            [['_route' => 'current_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::photoAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'current_delete_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::deletePhotoAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'current_post_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['cid', 'id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'current_put_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, false, null],
        ],
        5326 => [[['_route' => 'current_app_api_team_add', '_controller' => 'App\\Controller\\API\\TeamController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        5337 => [
            [['_route' => 'current_app_api_contest_single', '_controller' => 'App\\Controller\\API\\ContestController::singleAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'current_app_api_contest_changestarttime', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction', '_format' => 'json'], ['cid'], ['PATCH' => 0], null, false, true, null],
        ],
        5377 => [[['_route' => 'current_app_api_generalinfo_countryflag', '_controller' => 'App\\Controller\\API\\GeneralInfoController::countryFlagAction', '_format' => 'json'], ['countryCode', 'size'], ['GET' => 0], null, false, true, null]],
        5407 => [[['_route' => 'current_app_api_executable_single', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        5441 => [[['_route' => 'current_app_api_judgehost_updatejudgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction', '_format' => 'json'], ['hostname'], ['PUT' => 0], null, false, true, null]],
        5480 => [[['_route' => 'current_app_api_judgehost_updatejudging', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction', '_format' => 'json'], ['hostname', 'judgetaskid'], ['PUT' => 0], null, false, true, null]],
        5523 => [[['_route' => 'current_app_api_judgehost_adddebuginfo', '_controller' => 'App\\Controller\\API\\JudgehostController::addDebugInfo', '_format' => 'json'], ['hostname', 'judgeTaskId'], ['POST' => 0], null, false, true, null]],
        5559 => [[['_route' => 'current_app_api_judgehost_addjudgingrun', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction', '_format' => 'json'], ['hostname', 'judgeTaskId'], ['POST' => 0], null, false, true, null]],
        5584 => [[['_route' => 'current_app_api_judgehost_internalerror', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction', '_format' => 'json'], [], ['POST' => 0], null, false, false, null]],
        5617 => [[['_route' => 'current_app_api_judgehost_getfiles', '_controller' => 'App\\Controller\\API\\JudgehostController::getFilesAction', '_format' => 'json'], ['type', 'id'], ['GET' => 0], null, false, true, null]],
        5637 => [[['_route' => 'current_app_api_judgehost_getjudgetasks', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgeTasksAction', '_format' => 'json'], [], ['POST' => 0], null, false, false, null]],
        5658 => [[['_route' => 'current_app_api_judgement_single_1', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        5686 => [[['_route' => 'current_app_api_language_single', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        5720 => [[['_route' => 'current_app_api_organization_single_1', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        5737 => [
            [['_route' => 'current_app_api_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::logoAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_organization_deletelogo', '_controller' => 'App\\Controller\\API\\OrganizationController::deleteLogoAction', '_format' => 'json'], ['id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'current_app_api_organization_setlogo', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'current_app_api_organization_setlogo_1', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['id'], ['PUT' => 0], null, false, false, null],
        ],
        5771 => [[['_route' => 'current_app_api_submission_single', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        5786 => [[['_route' => 'current_submission_files_root', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, false, null]],
        5813 => [[['_route' => 'current_app_api_team_single_1', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        5831 => [
            [['_route' => 'current_app_api_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::photoAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_team_deletephoto', '_controller' => 'App\\Controller\\API\\TeamController::deletePhotoAction', '_format' => 'json'], ['id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'current_app_api_team_setphoto', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'current_app_api_team_setphoto_1', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['id'], ['PUT' => 0], null, false, false, null],
        ],
        5856 => [
            [['_route' => 'current_app_api_user_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::singleAction'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
