<main class="max-h-full overflow-hidden overflow-y-scroll flex-1 bg-slate-800 p-5">
  {{-- judul halaman --}}
  <h3 class="text-2xl lg:text-4xl font-medium mt-6 mb-6 lg:mb-12">My Galleries</h3>
  {{-- alert login sukses --}}
  @if (session()->has('loginSuccess'))
  <div class="w-full lg:w-1/2 relative text-white text-base text-center bg-green-500 border-0 rounded mx-auto mb-4 px-6 py-4">
    <span class="inline-block align-middle mr-8">
      {{ session('loginSuccess') }}, {{ auth()->user()->name }}
    </span>
    <button class="absolute top-0 right-0 text-2xl leading-none font-semibold bg-transparent outline-none focus:outline-none mt-4 mr-6" onclick="closeAlert(event)">
      <span>×</span>
    </button>
  </div>
  @endif
  {{-- alert crud berhasil --}}
  @if (session()->has('success'))
  <div class="w-full lg:w-1/2 relative text-white text-base text-center bg-green-600 border-0 rounded mx-auto mb-4 px-6 py-4">
    <span class="inline-block align-middle mr-8">
      {{ session('success') }}
    </span>
    <button class="absolute top-0 right-0 text-2xl leading-none font-semibold bg-transparent outline-none focus:outline-none mt-4 mr-6" onclick="closeAlert(event)">
      <span>×</span>
    </button>
  </div>
  @endif
  {{-- tambah data --}}
  <a href="/dashboard/galleries/create" class="inline-block text-white bg-green-700 hover:bg-green-800 rounded-md p-2 mt-6 lg:mt-auto">Tambah data</a>
  {{-- tabel --}}
  <div class="flex flex-col mt-8 lg:mt-12">
    <div class="overflow-x-auto -my-2 sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full align-middle sm:px-6 lg:px-8 py-2">
        <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
          <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr class="text-center">
                {{-- table title --}}
                <th scope="col" class="text-xs text-gray-500 tracking-wider uppercase font-medium px-6 py-3">
                  No.
                </th>
                <th scope="col" class="text-xs text-gray-500 tracking-wider uppercase font-medium px-6 py-3">
                  Judul Galeri
                </th>
                <th scope="col" class="text-xs text-gray-500 tracking-wider uppercase font-medium px-6 py-3">
                  Kategori Galeri
                </th>
                <th scope="col" class="text-xs text-gray-500 tracking-wider uppercase font-medium px-6 py-3">
                  Aksi
                </th>
              </tr>
            </thead>
            {{-- table body --}}
            <tbody class="text-center bg-white divide-y divide-gray-200">
              @foreach ($galleries as $gallery)
              <tr class="text-dark hover:bg-gray-100 hover:shadow-lg transition-all">
                <td class="whitespace-nowrap px-6 py-4">
                  {{ $loop->iteration }}
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                  {{ $gallery->title }}
                </td>
                <td class="whitespace-nowrap px-6 py-4">
                  {{ $gallery->category->name }}
                </td>
                <td class="flex justify-center text-sm font-medium whitespace-nowrap px-6 py-4">
                  {{-- read --}}
                  <a href="/dashboard/galleries/{{ $gallery->slug }}" class="text-dark bg-teal-300 hover:bg-teal-500 rounded-lg mr-1 p-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg></a>
                  {{-- update --}}
                  <a href="/dashboard/galleries/{{ $gallery->slug }}/edit" class="text-dark bg-orange-300 hover:bg-orange-500 rounded-lg p-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                    </svg></a>
                  {{-- delete --}}
                  <form action="/dashboard/galleries/{{ $gallery->slug }}" method="post" class="inline-block">
                    @method('delete')
                    @csrf
                    <button type="submit" class="text-dark bg-red-400 hover:bg-orange-600 rounded-lg ml-1 p-2" onclick="return confirm('Yakin ingin menghapus postingan?')">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                      </svg>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>