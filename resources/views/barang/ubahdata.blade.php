
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Barang</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Ubah Data Kirim Barang</h1>
    <div class="container">

        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card"> 
                <div class="card-body">
                    <form action="/updatedatabarang/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                             <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
  
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Foto Barang</label>
                               <input type="text" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
  
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Berat</label>
                               <input type="number" name="berat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
  
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Biaya</label>
                               <input type="number" name="biaya" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
  
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tujuan</label>
                               <input type="text" name="tujuan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
  
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Status</label>
                               <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </form>
                      
                </div>
            </div>
          </div>
        </div>

    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>

