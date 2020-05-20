<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Certificate</title>
    <style>
        @page {
            margin: 0;
        }
        body {
            width: 100%;
        }

        .page-container {
            width: 56%;
            margin: 50mm 25mm 25mm auto;
        }
    </style>
</head>
<body>
    @include('pdf/page-background', [ 'image' => $backgroundImage ])

    <div class="page-container">
        <h1>Page 1</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate distinctio deleniti expedita autem et voluptate dignissimos blanditiis totam necessitatibus impedit esse similique ad, non accusamus laudantium odio dolore ullam!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate distinctio deleniti expedita autem et voluptate dignissimos blanditiis totam necessitatibus impedit esse similique ad, non accusamus laudantium odio dolore ullam!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate distinctio deleniti expedita autem et voluptate dignissimos blanditiis totam necessitatibus impedit esse similique ad, non accusamus laudantium odio dolore ullam!</p>
    </div>

    @include('pdf/page-break')
    @include('pdf/page-background', [ 'image' => $backgroundImage ])

    <div class="page-container">
        <h1>Page 2</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate distinctio deleniti expedita autem et voluptate dignissimos blanditiis totam necessitatibus impedit esse similique ad, non accusamus laudantium odio dolore ullam!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate distinctio deleniti expedita autem et voluptate dignissimos blanditiis totam necessitatibus impedit esse similique ad, non accusamus laudantium odio dolore ullam!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate distinctio deleniti expedita autem et voluptate dignissimos blanditiis totam necessitatibus impedit esse similique ad, non accusamus laudantium odio dolore ullam!</p>
    </div>

    @include('pdf/page-break')
    @include('pdf/page-background', [ 'image' => $backgroundImage ])

    <div class="page-container">
        <h1>Page 3</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate distinctio deleniti expedita autem et voluptate dignissimos blanditiis totam necessitatibus impedit esse similique ad, non accusamus laudantium odio dolore ullam!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate distinctio deleniti expedita autem et voluptate dignissimos blanditiis totam necessitatibus impedit esse similique ad, non accusamus laudantium odio dolore ullam!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia cupiditate distinctio deleniti expedita autem et voluptate dignissimos blanditiis totam necessitatibus impedit esse similique ad, non accusamus laudantium odio dolore ullam!</p>
    </div>
</body>
</html>
