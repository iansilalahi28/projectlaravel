<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Input Berita</title>
</head>
    <div class="container mt-4">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan judul berita">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan isi berita"></textarea>
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="col-lg-7">
            <button type="submit" class="btn btn-success mt-5">Save</button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>