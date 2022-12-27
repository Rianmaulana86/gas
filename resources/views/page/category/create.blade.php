<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <div class="container mt-5">
        <h1>TAMBAH DATA</h1>
        <form action="/category/store" method="post">
            @csrf
            <div class="form-group">
            <input type="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Enter name" name="name">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>  
    <script>
        document.addEventListener('trix-file-accept', function(e){
          e.preventDefault();
        })
      
          function previewImage()
          {
            
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
      
      
        imgPreview.style.display = 'block';
      
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
      
        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
          }
      
      
      
      </script>