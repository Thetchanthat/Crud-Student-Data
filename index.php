<!-- link jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- link php -->
<?php
include('./function.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data || Student</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- link css -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container-fluid p-5 bg-dark">
        <h1 class="text-center text-light">ព័ត៏មានពិន្ទុ <span class="text-warning">និស្សិត</span></h1>
        <!-- Button trigger modal -->
        <button type="button"  id="btn-open-add" class="btn btn-primary fs-5" name="btn-buy" data-bs-toggle="modal" data-bs-target="#exampleModal">
            + បន្ថែមព័ត៏មាន
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-warning " id="exampleModalLabel">បញ្ចូលព័ត៏មាន</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <input type="text" hidden name="id" id="id"><br>
                            <label for="">ឈ្មោះ :</label>
                            <input type="text"  id="name"  name="name"  class="form-control my-2" placeholder="បញ្ចូលឈ្មោះ">
                            <label for="" name="sex">ភេទ :</label>
                            <select name="gender" id="gender" class="form-select my-2">
                                <option value="ប្រុស">ប្រុស</option>
                                <option value="ស្រី">ស្រី</option>
                            </select>
                            <label for="">PHP :</label>
                            <input type="text" name="php" id="php" class="form-control my-2" placeholder="Enter Score Php:">
                            <label for="">Java : </label>
                            <input type="text" name="java" id="java" class="form-control my-2" placeholder="Enter Score Java:">
                            <label for="">PYTHON :</label>
                            <input type="text" name="python" id="python" class="form-control my-2" placeholder="Enter Score Python:">


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">បិទ</button>
                                <button type="Submit" name="btn-submit" id="submit" class="btn btn-primary">បញ្ចូល</button>
                                <button type="Submit" name="update" id="update" class="btn btn-warning ">កែទិន្នន័យ</button>

                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <table class="table table-hover table-dark ">
            <tr>
                <th class="text-warning">លេខរៀង</th>
                <th class="text-warning">ឈ្មោះ</th>
                <th class="text-warning">ភេទ</th>
                <th class="text-warning">PHP</th>
                <th class="text-warning">JAVA</th>
                <th class="text-warning">PYTHON</th>
                <th class="text-warning">ពិន្ទុសរុប</th>
                <th class="text-warning">មធ្យមភាគ</th>
                <th class="text-warning">និទ្ទេស</th>
                <th class="text-warning">ACTION</th>
            </tr>
            <?php GetData(); ?>
        </table>
    </div>

<!-- Modal Delete-->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">លុបទិន្នន័យ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <h5>តើអ្នកពិតប្រាកចង់លុបទិន្នន័យមែនទេ?</h5>
          <input type="text " name="del_id" id="del_id">
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">No</button>
            <button type="submit" name="btn_delete" class="btn btn-danger">Yes</button>
          </div>
        </form>
      </div>
     
    </div>
  </div>
</div>


</body>
<!-- link js script -->
<script src="./script.js">
   
</script>
</html>