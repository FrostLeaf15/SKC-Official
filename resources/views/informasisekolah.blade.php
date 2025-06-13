@extends('app')

@section('title', 'Profile Sekolah')

@section('content')

    <div class="container py-4">
        {{-- Sambutan Kepala Sekolah --}}
        <div class="row align-items-center g-4 mt-2">
            <div class="col-12 col-md-3">
                <img alt="Foto"
                    src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=2680&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="img-fluid rounded object-fit-cover" />
            </div>
            <div class="col-12 col-md-9">
                <h3 class="fw-semibold text-dark fs-4 fs-md-4">Lorem, ipsum dolor.</h3>
                <p class="mt-2 text-muted small fs-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quia dolore consequatur ullam laborum
                    cum at exercitationem, porro dignissimos culpa quidem! Odit laboriosam delectus commodi totam
                    laudantium iusto voluptatum excepturi dolor consectetur quos. Sunt in eligendi vero temporibus
                    officiis rerum corporis. Illum fugiat consequuntur sed explicabo necessitatibus placeat distinctio
                    eos quam laudantium amet tempore, omnis nisi, illo rem odio molestiae suscipit voluptate praesentium
                    nobis possimus eaque perferendis quas! Eum sit at itaque, perspiciatis voluptate aspernatur ut
                    dolorum aperiam dolores distinctio, sunt, dignissimos laborum culpa. Consequuntur, deleniti nesciunt
                    consequatur laborum et minima quis vero neque exercitationem mollitia autem, numquam vel
                    dignissimos.
                </p>
            </div>
        </div>

        {{-- Sejarah Singkat --}}
        <h2 class="mt-5 text-center">Sejarah Singkat</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, exercitationem consequuntur autem atque,
            quia minus omnis obcaecati, similique fuga commodi sint alias beatae quaerat quibusdam temporibus
            accusantium cupiditate officiis? Consectetur illo odio nihil, veniam a itaque velit in quod, eveniet
            asperiores aspernatur quas ad, perspiciatis atque blanditiis suscipit ea voluptatem totam culpa cumque?
            Dolores iusto qui, itaque dolorum fugit reiciendis iure pariatur voluptate facere sequi dolore voluptas odio
            amet excepturi, maxime quos sint nihil molestias consequatur. Possimus, sint. Molestiae architecto qui
            possimus quo? Accusantium tempora maxime, sit ipsam facere laborum amet harum asperiores, laudantium
            nesciunt doloremque reprehenderit est. Autem, animi!<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ullam quisquam repellendus incidunt,
            asperiores reprehenderit cum magni et? Ut asperiores est obcaecati, commodi voluptate doloremque fugiat
            rerum iste, omnis quisquam necessitatibus ipsum itaque ratione cumque repellendus quidem voluptatem tenetur
            natus eaque nam eveniet, quis sint qui ex. Aliquam molestiae mollitia adipisci vero commodi totam. Ipsum
            dolore eos quis asperiores! At dolores aliquid quaerat optio eius aspernatur, blanditiis tempore ducimus
            modi, rem reprehenderit sit libero consequuntur!
        </p>

        {{-- Visi dan Misi --}}
        <div class="visidanmisi">
            <div class="row mt-5 g-4">
                <div class="col-lg-6">
                    <div class="border p-4 rounded shadow-sm text-center h-100">
                        <h2>Visi</h2>
                        <p>Menjadi Sekolah Menengah Kejuruan Kesehatan Yang Unggul Dan Juara Dalam Mencetak Lulusan
                            Asisten Tenaga Kesehatan Yang Profesional.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="border p-4 rounded shadow-sm h-100">
                        <div class="text-center">
                            <h2>Misi</h2>
                        </div>
                        <p class="text-justify">
                            1. Mewujudkan kurikulum berbasis kompetensi sesuai dengan kebutuhan Dunia Usaha / Dunia
                            Kerja <br>
                            2. Mewujudkan tenaga pendidik dan tenaga kependidikan yang profesional <br>
                            3. Mewujudkan lulusan Asisten Tenaga Kesehatan yang kompeten, kreatif, inovatif, dan mandiri
                            untuk dapat berkompetisi di Dunia Usaha / Dunia Kerja <br>
                            4. Mewujudkan lulusan yang berjiwa kewirausahaan sehingga dapat menciptakan lapangan Kerja
                            di bidang kesehatan <br>
                            5. Mewujudkan sarana prasarana yang sesuai dengan standar Dunia Usaha / Dunia Industri <br>
                            6. Mewujudkan kewirausahaan sekolah yang bersinergi dengan Bisnis Center dan Teaching Factory
                            <br>
                            7. Mewujudkan tata kelola keuangan yang transparan dan akuntabel
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tujuan --}}
        <div class="mt-5 text-center border p-4 rounded shadow-sm">
            <h2>Tujuan dan Sasaran</h2>
            <p class="text-justify">
                1. Memiliki kurikulum yang berbasis kompetensi berdasarkan dengan kebutuhan Dunia Usaha dan Dunia Industri
                sehingga terlaksananya proses pembelajaran yang variatif dan inovatif dengan sumber daya lingkungan sekolah.
                <br>
                2. Memiliki tenaga pengajar dan tenaga kependidikan yang berkualitas secara kuantitas berdasarkan
                kompetensinya sehingga memenuhi kualifikasi profesional,sertifikasi kompetensi, keratif, inovatif, dan
                berkarakter. <br>
                3. Memiliki lulusan Asisten Tenaga Kesehatan yang kompeten profesional, kreatif, inovatif dan mandiri
                sehingga dapat berkompetisi di Dunia Usaha / Dunia Industri atau melanjutkan studi ke jenjang yang lebih
                tinggi. <br>
                4. Memiliki lulusan yang mampu menciptakan kewirausahaan dibidang pelayanan masyarakat khususnya kesehatan.
                <br>
                5. Memiliki laboratorium dan ruang teori yang berstandar dengan lingkungan Dunia Usaha / Dunia Industri
                serta relevan dalam mendukung kegiatan pembelajaran sekolah. <br>
                6. Memiliki Kewirausahaan berdasarkan program Sekolah Pencetak Wirausaha (SPW) yang bersinergi dengan Bisnis
                Center pada bidang kesehatan. <br>
                7. Memiliki Pengelolaan Keuangan yang dapat diketahui oleh warga sekolah, komite sekolah dan pemerintah.
            </p>
        </div>

        {{-- Struktur Sekolah --}}
        <div class="mt-5">
            <h2>Struktur Sekolah</h2>
            <p>Berikut adalah struktur Sekolah:</p>
            <ul>
                <li>Kepala Sekolah: Budi Santoso</li>
                <li>Wakil Kepala Sekolah: Siti Aminah</li>
                <li>Guru Kelas: Joko Widodo</li>
                <li>Guru Olahraga: Rina Sari</li>
                <li>Staff Administrasi: Andi Prasetyo</li>
            </ul>
        </div>
    </div>


@endsection
