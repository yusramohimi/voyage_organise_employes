<?php
    require ('database.php');
    $title = "Page d'inscription";
    require 'masterPage.php';

    // if (!isset($_SESSION['codeEmp']) && ($_SERVER['PHP_SELF'] != "/connexionEmp.php") ){
    //     header("Location: connexionEmp.php");
    //     exit();
    // }
    require 'listeDeroulante.php'
?>


<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-200">
    <!-- <div class="heading text-center font-bold text-3xl m-5 text-blue-500">S'inscrire</div>
    <div class="heading text-center text-l m-5 text-black-400">Veuillez remplir tous les champs</div> -->
<style>
  body {background:white !important;}
</style>
  
    <form action="sinscrireAction.php" method="POST">
        <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl mt-7">
            <div>
                <label for="villeD"  class="mb-2 block text-base font-medium text-[#07074D]" > Ville de départ </label>
                <select name="villeD" id="villeD" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >
                    <option value="" selected disabled> Selectionnez votre Ville de départ</option>
                    <?php foreach ($villesD as $villeD): ?>
                        <option value="<?php echo ($villeD['villeD']); ?>">
                            <?php echo ($villeD['villeD']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="villeA"  class="mb-2 block text-base font-medium text-[#07074D]" >Ville d'arrivée </label>
                <select name="villeA" id="villeA" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >
                    <option value="" selected disabled>Selectionnez votre Ville d'arrivée</option>
                    <?php foreach ($villesA as $villeA): ?>
                        <option value="<?php echo ($villeA['villeA']); ?>">
                            <?php echo ($villeA['villeA']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="dateVoyage"  class="mb-2 block text-base font-medium text-[#07074D]" > Date de voyage </label>
                <input type="date" name="dateVoy" id="dateVoyage" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div>
                <label for="nbrePers"  class="mb-2 block text-base font-medium text-[#07074D]" > le nombre de personnes </label>
                <input type="number" name="nbrePers" id="nbrePers" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Entrez le nombre de personnes"/>
            </div>
            
            <!-- icons -->
            <div class="icons flex text-gray-500 m-2">
            <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
            <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" /></svg>
            <div class="count ml-auto text-gray-400 text-xs font-semibold">0/300</div>
            </div>
            <!-- buttons -->
            <div class="buttons flex">
            <!-- <input type="reset" class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto" value="Cancel"> -->
            <input  class="btn border border-blue-500 p-1 px-4 font-semibold cursor-pointer text-gray-100 ml-2 bg-blue-500 hover:bg-blue-600" type="submit" value="S'inscrire">
            <!-- <button class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto" id="btn-connecter">Connect</button> -->
            </div>
        </div>
    </form>
    </script>
    </body>
</html>
