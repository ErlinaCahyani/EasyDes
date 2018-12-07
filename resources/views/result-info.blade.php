@extends('layout.app')

@section('content')
	<div class="top" style="margin-top:20vh; padding-bottom: 5vh;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">
						<div><a href="info"> <i class="fa fa-chevron-left mr-2"></i> Kembali ke pencarian instansi</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <div class="top" style="">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title text-center pt-0">
              <h2>Hasil Pencarian</h2>
            </div>
          </div>
        </div>
        <div class="">
          <div class="my-2">
            Nama Kabupaten : <?php echo $result->daftar_instansi[0]->nama_kabupaten ?>
          </div>
        <?php
          foreach ($result->daftar_instansi as $hasil) {
            ?>
            <table class="table table-striped mb-5">
            <col width="30%">
            <col width="70%">
              <tbody>
                <tr>
                  <th scope="row">Jenis Instansi</th>
                  <td><?php echo $hasil->jenis_instansi ?></td>
                </tr>
                <tr>
                  <td scope="row">Nama Instansi</td>
                  <td><?php echo $hasil->nama_instansi ?></td>
                </tr>
                <tr>
                  <td>Nomor Instansi</td>
                  <td><?php echo $hasil->nomor_instansi ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><?php echo $hasil->alamat_instansi ?></td>
                </tr>
              </tbody>
            </table>
            <?php
          }
        ?>
        </div>
      </div>
    </div>


@endsection