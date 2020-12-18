<?php include 'qrCode.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./build/app.css">
    <title>Qr Code Generator</title>
</head>
<body class="bg-gray-200">

<div class="flex items-center justify-center h-screen bg-gray-200 sm:px-6">
    <div class="w-full max-w-sm p-4 bg-white rounded-md shadow-md sm:p-6">
        <div class="flex items-center justify-center">
            <span class="text-xl font-medium text-gray-900">Generateur de Qrcode</span>
        </div>
        <form class="mt-4" action="" method="POST">
            <label for="email" class="block">
                <span class="text-sm text-gray-700">Email</span>
                <input type="email" id="email" name="email" autocomplete="username"
                    class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
                    required />
            </label>
            <label for="name" class="block mt-3">
                <span class="text-sm text-gray-700">name</span>
                <input type="text" id="name" name="name" autocomplete="current-name"
                    class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
                    required />
            </label>
           
            <div class="mt-6">
                <button type="submit"
                    class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500">Generer</button>
            </div>
            <?php if(isset($filename)): ?>
                <div class="flex justify-center">
                    <img  src="<?= $filename; ?>" alt="Qrcode" loading="lazy" class="w-60">

                </div>
                <a href="<?= $filename; ?>" class="m-5 text-xl font-semibold text-center hover:text-purple-600" download> Télécharger </a>
            <?php endif ?>

            <?php if (isset($errors))  echo $errors; ?>
        </form>
    </div>
</div>
    
</body>
</html>