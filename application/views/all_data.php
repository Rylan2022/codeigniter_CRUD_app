<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>CURD</title>
</head>

<body>

    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th class="bg-primary text-white p-3">ID</th>
                <th class="bg-primary text-white p-3">Full Name</th>
                <th class="bg-primary text-white p-3">Email</th>
                <th class="bg-primary text-white p-3">Textarea</th>
                <th class="bg-primary text-white p-3">Qualification</th>
                <th class="bg-primary text-white p-3">Spealization</th>
                <th class="bg-primary text-white p-3">Language</th>
                <th class="bg-primary text-white p-3">Image</th>
                <th class="bg-primary text-white p-3">Status</th>
                <th class="bg-primary text-white p-3">Added On</th>
                <th class="bg-primary text-white p-3 " colspam="2">Action</th>
            </tr>
            <?php if (!empty($arr)) {
                foreach ($arr as $key => $value) {
                    if ($value->status == 1) {
                        $status = '<span class="badge bg-success">Active</span>';
                    } else {
                        $status = '<span class="badge bg-danger">Deactive</span>';
                    }
                    ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value->username ?></td>
                        <td><?= $value->email ?></td>
                        <td><?= $value->textarea ?></td>
                        <td><?= $value->qualification ?></td>
                        <td><?= $value->spealization ?></td>
                        <td><?= $value->language ?></td>
                        <td><img width="50px" height="50px" src="<?= base_url('./uploads/') ?><?= $value->image ?>" alt=""></td>
                        <td><?= $status ?></td>
                        <td><?= $value->added_on ?></td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td>Record not found!</td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

</html>