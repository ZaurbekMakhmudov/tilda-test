<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 30px">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Тестовое задание</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/task-1">Task-1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/task-2">Task-2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/task-3">Task-3</a>
                </li>
                <li class="nav-item">
                    <input type="hidden" name="default-city" id="default-city" value="<?php echo $content['default_city']?>">
                    <a id="phone-link" class="nav-link" href=""><?php echo $content['phone']?></a>
                </li>
                <li class="nav-item">
                    <select id="city-select" class="form-select" aria-label="Default select example">
                        <option value="MSK" selected>Москва</option>
                        <option value="SPB">Санкт-Петербург</option>
                        <option value="NSK">Новосибирск</option>
                        <option value="KZN">Казань</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
</nav>