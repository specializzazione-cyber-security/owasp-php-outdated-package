<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CORE: the slim PHP MVC Framework</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="text-white">

    <div class="container-fluid bg-img" >
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center fw-bold display-3">PDF non sicuri: l'alternativa "economica"</h1>
                <h3 class="text-center display-6">Non ci assumiamo alcuna responsabilità per danni causati</h3>
                <p class="text-center">PS. Questo è un convertitore da HTML a PDF</p>
            </div>
            <div class="col-6">
                <h6 class="text-center">Utilizza questo blocco di testo per inserire il contenuto del tuo pdf</h6>
                <div class="form-floating d-flex align-items-center justify-content-center">
                    <textarea class="form-control" placeholder="Leave a comment here" id="pdf-text" style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Scrivi Qui</label>
                    <button type="submit" id="submit-btn" class="btn btn-warning">Genera!</button>

                </div>
            </div>
        </div>
    </div>

    <script>
        let btn = document.querySelector('#submit-btn');
        let textarea = document.querySelector('#pdf-text');

        btn.addEventListener('click',()=>{
            let a = document.createElement('a');
            console.log(textarea.value);
            a.setAttribute('href', `http://localhost:8000/pdf/make?data=${textarea.value}`);
            a.click();

        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>