<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
body { 
        background-image: url("https://png.pngtree.com/background/20210715/original/pngtree-background-white-picture-image_1281315.jpg"); 
    }
    </style>

<body class="flex min-h-screen justify-center items-center bg-black/50">
    <div class="flex flex-col w-1/3 p-6 h-1/2 rounded-md sm:p-10  dark:text-gray-100">
        <div class="mb-8 text-center">
            <h1 class="my-3 text-4xl font-bold" style="color:black"> register</h1>
            <p class="text-sm dark:text-gray-400"></p>
        </div>
        <form action="<?php echo base_url(); ?>auth/aksi_register" method="post" class="space-y-12">
            <div class="space-y-4">
                <div>
                    <label for="username" class="block mb-2 text-sm"  style="color:black">username </label>
                    <input type="username" name="username" id="username" placeholder=" username" autocomplete="off"
                        class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100"
                        fdprocessedid="kq4yx">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm" style="color:black">Email </label>
                    <input type="email" name="email" id="email" placeholder=" email" autocomplete="off"
                        class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100"
                        fdprocessedid="kq4yx">
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <label for="password" class="text-sm" style="color:black">Password</label>
                        <a rel="noopener noreferrer" href="#" class="text-xs hover:underline dark:text-gray-400"></a>
                    </div>
                    <input type="password" name="password" id="password" placeholder=" password"
                        autocomplete="off"
                        class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100"
                        fdprocessedid="3gj54k">
                </div>
                <div class="space-y-4">
                <div>
                    <label for="role" class="block mb-2 text-sm"  style="color:black">role </label>
                    <input type="role" name="role" id="role" placeholder=" role" autocomplete="off"
                        class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100"
                        fdprocessedid="kq4yx">
                </div>
            </div>
            <div class="space-y-2">
                <div>
                    <button type="submit"
                        class="w-full px-8 py-3 font-semibold rounded-md dark:bg-violet-400 dark:text-gray-900"
                        fdprocessedid="r78vz9">register</button>
                </div>
                <p class="px-6 text-sm text-center dark:text-gray-400">
                    <a rel="noopener noreferrer" href="<?php echo base_url('auth'); ?>" class="hover:underline dark:text-violet-400" style="color:black">DAFTAR DISINI!!!</a>.
                </p>
        </form>
                </p>
            </div>
    </div>
</body>

</html>