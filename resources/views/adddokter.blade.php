<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Dokter</title>
    @include('layout.head')
</head>

<body class="m-0 font-poppins antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    @include('layout.left-side')
    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        @include('layout.navbar')
        <!-- end Navbar -->
        <div class="p-6">
            <div class='w-full bg-white rounded-xl h-fit mx-auto'>
                <div class="p-3 text-center">
                    <h1 class="font-extrabold text-3xl">Add dokter</h1>
                </div>
                <div class="p-6">
                    <form class="space-y-5" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="space-y-2">
                            <label class="font-semibold text-black">Nama:</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                id="name" name="name" placeholder="John Doe" required>
                        </div>
                        <div class="space-y-2">
                            <label class="font-semibold text-black">Email:</label>
                            <input type="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                id="email" name="email" placeholder="JohnDoe@gmail.com" required>
                        </div>
                        <div class="space-y-2">
                            <label class="font-semibold text-black">Password:</label>
                            <input type="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                id="password" name="password" placeholder="XXXXXXXX" required>
                        </div>
                        <div class="space-y-2">
                            <label class="font-semibold text-black">Password Confirmation:</label>
                            <input type="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                id="password" name="password_confirmation" placeholder="XXXXXXXXX" required>
                        </div>
                        <div class="space-y-2">
                            <label class="font-semibold text-black">Alamat:</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                id="alamat" name="alamat" placeholder="Jl.Sekar Kembang 1 No.71" required>
                        </div>
                        <div class="space-y-2">
                            <label class="font-semibold text-black">NIK:</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                id="nik" name="nik" placeholder="3270783878" required>
                        </div>
                        <div class="space-y-2">
                            <label class="font-semibold text-black">Keahlian:</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                id="keahlian" name="keahlian" placeholder="Poli Gigi" required>
                        </div>
                        <div class="space-y-2">
                            <label class="font-semibold text-black">Level:</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                id="level" name="level" required>
                                <option value="dokter">Dokter</option>
                                </select>
                        </div>
                        <button type="submit"
                            class="bg-blue-500  text-white p-4 w-full hover:text-black rounded-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
@include('layout.script')

</html>