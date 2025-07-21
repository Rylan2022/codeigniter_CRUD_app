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
    <?php echo form_open_multipart('CurdController/add_data'); ?>
    <h2 class="mb-3 mt-5 mx-auto w-75">Contact Form</h2>
    <div class="mb-3 mt-2 mx-auto w-75">
        <label for="username" class="form-label">Username</label>
        <input type="name" name="username" class="form-control" placeholder="">
        <?php echo form_error('username'); ?>
    </div>
    <div class="mb-3 mt-2 mx-auto w-75">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" placeholder="">
        <?php echo form_error('email'); ?>
    </div>
    <div class="mb-3 mt-2 mx-auto w-75">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="">
        <?php echo form_error('password'); ?>
    </div>
    <div class="mb-3 mt-2 mx-auto w-75">
        <label for="confpass" class="form-label">Password Confirm</label>
        <input type="password" name="confpass" class="form-control" placeholder="">
        <?php echo form_error('confpass'); ?>
    </div>
    <div class="mb-3 mt-2 mx-auto w-75">
        <label for="textarea" class="form-label">Example textarea</label>
        <textarea class="form-control" name="textarea" rows="3"></textarea>
        <?php echo form_error('textarea'); ?>
    </div>
    <div class="mb-3 mt-2 mx-auto w-75">
        <label for="image" class="form-label">Default file input example</label>
        <input class="form-control" type="file" name="image">
        <?php echo form_error('image'); ?>
    </div>

    <div class="mb-3 mt-2 mx-auto w-75">
        <label for="" class="form-label">Qualification</label>
        <div class="form-check mb-3 mt-2 mx-auto w-75">
            <input class="form-check-input" type="checkbox" value="BCA" name="qualification" id="checkDefault">
            <label class="form-check-label" for="checkDefault">
                BCA
            </label>
        </div>
        <div class="form-check mx-auto w-75">
            <input class="form-check-input" type="checkbox" value="Diploma" name="qualification" id="checkChecked"
                checked>
            <label class="form-check-label" for="checkChecked">
                Diploma
            </label>
        </div>
    </div>

    <div class="role mb-3 mt-2 mx-auto w-75">
        <label class="form-control">Spealization</label>
        <div class="form-check mx-auto w-75">
            <input class="form-check-input" type="radio" name="specialization" value="Computer Science"
                id="radioDefault1">
            <label class="form-check-label" for="radioDefault1">
                Computer Science
            </label>
        </div>
        <div class="form-check mx-auto w-75">
            <input class="form-check-input" type="radio" name="specialization" value="Mechanical Engineering"
                id="radioDefault2" checked>
            <label class="form-check-label" for="radioDefault2">
                Mechanical Engineering
            </label>
        </div>
    </div>

    <div class="mb-3 mt-2 mx-auto w-75">
        <label class="form-contorl">Language</label>
        <select class="form-control" name="language">
            <option value="">select</option>
            <option value="PHP">PHP</option>
            <option value="JAVA">JAVA</option>
            <option value="Python">Python</option>
        </select>
        <?php echo form_error('language'); ?>
    </div>


    <div class="col-auto mt-3 mx-auto w-75">
        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
    </div>
    <?php echo form_close(); ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

</html>