<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Antrian</title>
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
                    <h1 class="font-extrabold text-3xl">Add antrian</h1>
                </div>
                <div class="p-6">
                    <form class="space-y-5" method="post" action="{{ route('createantrian') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="grid grid-cols-3 gap-4">
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Pasien:</label>
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                    id="pasien_id" name="pasien_id" required>
                                    <option value="">Select Pasien</option>
                                    @foreach ($pasien as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Dokter:</label>
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                    id="dokter_id" name="dokter_id" required>
                                    <option value="">Select Dokter</option>
                                    @foreach ($dokter as $d)
                                        <option value="{{ $d->id }}">{{ $d->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Pada Tanggal:</label>
                                <input type="datetime-local"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-2 rounded-lg w-full"
                                    id="pada_tanggal" name="pada_tanggal" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1">
                            <div class="space-y-2">
                                <label class="font-semibold text-black">Keluhan:</label>
                                <textarea class="border border-gray-300 bg-gray-50 w-full rounded-xl" name="penyakit" id="penyakit" cols="10"
                                    rows="10" required></textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="bg-blue-500 text-white p-4 w-full hover:text-black rounded-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
@include('layout.script')

</html>
