<div>
    @section('content')
        <div class="row">
            <div class="col-sm-12 offset-sm-0">
                <div class="card">
                    <div class="card-header">
                        <b>Committee</b> | Other Page
                    </div>

                   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">About</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="topics.blade.php">topics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="card-body">
                        <center>
                        <h2>
                            Selamat Datang di Website Simposium

                        </h2>
                      </center>
                        <img src="{{asset('gambar/tes.jpg')}}" alt="" width="1000" height="500">
                        <nav class="navbar navbar-light bg-light">
                         <div class="container">
                          <a class="navbar-brand" href="#">
                          </a>
                         </div>
                        </nav>

                    
                        Kegiatan ini dilakukan dengan melibatkan para ahli di bidang tertentu. Simposium merupakan kegiatan diskusi yang menampilkan suatu pokok pembahasan tertentu. Tujuannya adalah untuk mendapatkan berbagai pemikiran atau sudut pandang baru dari kalangan ahli. Pembicaranya terdiri dari pemateri utama dan presenter banding.
                        Simposium merupakan serangkaian pidato pendek yang dibacakan di depan orang banyak seorang pemimpin. Simposium itu sendiri menampilkan beberapa orang sebagai pembicara yang tujuannya untuk mengemukakan aspek-aspek pandangan yang berbeda dari topik yang sama.

                        <br><i>Istilah simposium itu sendiri berasal dari bahasa Yunani “sympo-sium” yang diturunkan oleh kata sympinein, yang dibentuk oleh akar kata syn yang artikanya “bersama” dan akar kata pinein yang artinya “minum”. Istilah dari simposium itu juga dapat diartikan sebagai suatu konferensi yang diorganisasikan untuk mendiskusikan beberapa pokok masalah.</br></i>
                        <br><b><h5>Tujuan</h5></b>
                     Secara umum, tujuan diadakannya simposium adalah untuk menguraikan serta memaparkan berbagai aspek yang berbeda terkait suatu permasalahan/ topik tertentu dan membagikannya kepada pihak yang membutuhkan informasi, yaitu peserta.</br>
                    <br><b><h5>Ciri-Ciri Simposium</h5></b>
                    Suatu kegiatan bisa dikatakan sebagai simposium jika memenuhi ciri-ciri berikut.
                   <br> 1. Menampilkan beberapa ahli yang akan membahas suatu topik.
                   <br> 2. Memiliki moderator sebagai pemimpin acara.
                   <br> 3. Melibatkan peran peserta dan penyanggah.
                   <br> 4. Memiliki seorang pembahas utama atau juru bicara.
                   <br> 5. Diakhiri dengan diskusi panel.
                
                
                </div>



                    <div class="card-body">
                       @livewire('committee.other-page-list')
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <i>sympozia(c)2021</i>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
