        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Naam</label>
                <input class="form-control" type="text" name="name">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email">
            </div>

            <div class="form-group">
                <label for="topic">Onderwerp</label>
                <input class="form-control" type="text" name="topic">
            </div>

            <div class="form-group">
                <label for="description">Beschrijving</label>
                <input class="form-control" type="text" name="description">
            </div>
        </form>





