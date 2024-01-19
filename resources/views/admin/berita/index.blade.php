<x-applayout>

    <x-pagetitle title='Berita'>

    </x-pagetitle>
    <section class="section">


        @if (Auth::user()->is_admin != 'user')
            <h3>
                <a href="{{ route('berita.create') }}" class="btn btn-md btn-primary">BIKIN BERITA</a>
            </h3>
        @endif


        <div class="row">

            @forelse ($beritas as $berita)
                <div class="col-lg-3">

                    <a href="{{ $berita->link }}"> <!-- Card with an image on top -->
                        <div class="card">
                            <img src="{{ $berita->foto }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ $berita->deskripsi }}</p>
                            </div>
                        </div><!-- End Card with an image on top -->
                    </a>

                </div>
            @empty

                <a href="{{ route('berita.create') }}" class="btn btn-md btn-primary">BIKIN BERITA</a>
            @endforelse

        </div>
    </section>


    @push('script')
    @endpush


</x-applayout>
