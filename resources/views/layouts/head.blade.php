<!doctype html>

<head>
    <!-- ... --->

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @if(Route::is('home'))
    <title>NetworkApp: Latest News</title>
    @elseif(Route::is('dashboard'))
    <title>NetworkApp: Dashboard</title>
    @elseif(Route::is('createPosts'))
    <title>NetworkApp: Create Post</title>
    @elseif(Route::is('editPosts'))
    <title>NetworkApp: Edit Posts</title>
    @elseif(Route::is('viewPosts'))
    <title>NetworkApp: View Posts</title>
    @elseif(Route::is('editPostId'))
    <title>NetworkApp: Edit Post</title>
    @elseif(Route::is('contact'))
    <title>NetworkApp: Create Ticket</title>
    @elseif(Route::is('viewContact'))
    <title>NetworkApp: View Tickets</title>
    @elseif(Route::is('replyContactId'))
    <title>NetworkApp: Reply to Ticket</title>
    @elseif(Route::is('latestNewsCreateView'))
    <title>NetworkApp: Create LatestNews</title>
    @elseif(Route::is('editProfile'))
    <title>NetworkApp: Edit Profile</title>
    @elseif(Route::is('viewAllUsers'))
    <title>NetworkApp: View Users</title>
    @elseif(Route::is('viewSingleUser'))
    <title>NetworkApp: View Single User</title>
    @elseif(Route::is('viewSingleUserHistory'))
    <title>NetworkApp: View History</title>
    @elseif(Route::is('viewUsersAdmin'))
    <title>NetworkApp: View Users</title>
    @elseif(Route::is('sources'))
    <title>NetworkApp: View Sources</title>
    @endif
</head>
