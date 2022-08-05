<!doctype html>
<html lang="en">

<head>
    <title>Variant Combination</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
#result1 {
    display: none;
}
</style>
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">
            <h4 class="text-primary text-center">Variant Combination</h4>
        </div>
        <div class="card-body">
            <div id="combinationInput">
                <form id="variantForm">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <label for="">Type Color <span class="text-danger">*</span></label>
                                <input type="text" name="color" id="color" placeholder="Enter Color Comma Seperate."
                                    class="form-control">
                                <small>Eg - Red,Green,Blue etc.</small>
                                <div class="msgC"></div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <label for="">Type Size <span class="text-danger">*</span></label>
                                <input type="text" name="size" id="size" placeholder="Enter Size Comma Seperate."
                                    class="form-control">
                                <small>Eg - S,M,L,XL etc. or small,large,medium etc.</small>
                                <div class="msgS"></div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <label for="">Type Material <span class="text-danger">*</span></label>
                                <input type="text" name="material" id="material"
                                    placeholder="Enter Material Comma Seperate." class="form-control">
                                <small>Eg - Cotton,Wool,Polyester etc.</small>
                                <div class="msgM"></div>
                            </div>
                        </div>
                        <button type="button" id="create" class="btn btn-primary mt-4 float-right"
                            onclick="combination()"><i class="fa fa-plus"></i> Create Combination</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="card w-25 mt-3" id="result1">
        <div class="card-header">
            <a href="javascript:void(0)" title="Clear Result" onclick="clearResult()"
                class="btn btn-danger btn-sm float-right">&times;</a>
            <h4 class="text-primary text-center">:: Variations ::</h4>
        </div>
        <div class="card-body">
            <ol id="result">
            </ol>
        </div>
        <div class="card-footer">
            <span id="totalVariants" class="text-muted"></span>
        </div>
    </div>
</div>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="./main.js"></script>
</body>

</html>