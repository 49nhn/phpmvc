<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/output.css">
    <title>hello</title>
</head>

<body class="bg-white">
    <?php include_once '../views/components/header.php'; ?>
    <main>
        <div class="hero min-h-screen bg-base-200" >
            <div class="hero-content flex-col lg:flex-row-reverse bg-[url('/assets/img/hero-auth.png')] bg-no-repeat bg-right " >
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl font-bold">Login now!</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                        exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                </div>
                <div class="card flex-shrink-0 max-w-lg shadow-2xl bg-base-100">
                    <div class="card-body">
                        {{contentHere}}
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once '../views/components/footer.php'; ?>
</body>

</html>