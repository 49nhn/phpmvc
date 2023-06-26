<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/output.css">
    <title>hello</title>
</head>

<body class="bg-white">
    <?php  include_once '../views/components/header.php'; ?>
    <main>
        <div class="container mx-auto min-h-screen">
            <div class="row">
                <div class="col-12">
                    {{contentHere}}
                </div>
            </div>
        </div>
    </main>
    
    <?php   include_once '../views/components/footer.php'; ?>
</body>

</html>