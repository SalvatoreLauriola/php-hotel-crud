<?php
//head section
include __DIR__ . '/partials/templates/head.php';
?>



<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4">
                <h1 class="text-primary">Create New Room</h1>
            </header>


            <form action="./partials/create/server.php" method ="POST">
                <div class="form-group">
                    <label for="room_number">Room Number</label>
                    <input class="form-control" type="number" name="room_number" id="room_number" 
                    placeholder="Insert room number">
                </div>
                <div class="form-group">
                    <label for="beds">Beds Number </label>
                    <input class="form-control" type="number" name="beds" id="beds" 
                    placeholder="Insert bed number">
                </div>
                <div class="form-group">
                    <label for="floor">Floor</label>
                    <input class="form-control" type="number" name="floor" id="floor" 
                    placeholder="Insert floor">
                </div>
                <div class="form-group text-right">
                    <input class="btn btn-primary" type="submit" value="Create">
                </div>
            </form>
        </div>
    </div>
</main>


<?php // footer
include __DIR__ . '/partials/templates/footer.php'
?>