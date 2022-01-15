<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addbook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
    <div class="addbookform">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form>
                    <div class="card">
                        <div class="card-header">Add Book</div>
                        <div class="card-body">
                            <div class="mb-3">
                            <div class="mb-3">
                            <input class="form-control" type="text" name="name" placeholder="Book Name">
                            </div>
                            <div class="mb-3">
                            <input class="form-control" type="text" name="author" placeholder="Author">
                            </div>
                            <div class="mb-3">
                            <textarea class="form-control" name="description" placeholder="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            
                            <input type="submit" name="addbook" value="Add Book">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>