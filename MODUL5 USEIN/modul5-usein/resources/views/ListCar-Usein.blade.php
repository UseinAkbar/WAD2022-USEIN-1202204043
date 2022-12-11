<!DOCTYPE html>
<html lang="en">
    @include('partial.head')
<body>
    @include('partial.navbar')
    <section class="showroom">
        <div class="showroom__header">
            <h1 class="showroom__title">My Show Room</h1>
            <p class="showroom__desc">List Show Room Usein - 1202204043</p>
        </div>
    
        <div class="showroom__container">
            @foreach($showrooms as $data)
                <div class='card'>
                    <img src='{{"/asset/$data->image"}}' alt='' class='card__img'>
                    <h1 class='card__title'>{{$data->name}}</h1>
                    <p class='card__desc'>{{strlen($data->description) > 120 ? substr($data->description, 0, 100).'...' : $data->description}}</p>
                    <div class='card__cta-container'>
                        <a href='/detail/{{$data->id}}' class='card__detail-btn'>Detail</a>
                        <a href='/delete/{{$data->id}}' class='card__delete-btn'>Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
        <span class="showroom__total">Jumlah Mobil: {{$showrooms->count()}}</span>
    
        <div class="toast {{ isset($_GET['message']) && $_GET['message'] != 'none' ? 'show' : '' }}" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="1000">
            <div class="toast-header">
                <?php 
                    $message = isset($_GET['message']) ? $_GET['message'] : '';
    
                    switch ($message) {
                        case 'add-item':
                            echo '<span class="add-item"></span>';
                            break;
                        case 'delete-item':
                            echo '<span class="delete-item"></span>';
                            break;
                        case 'update-item':
                            echo '<span class="update-item"></span>';
                        default:
                            break;
                    }
                ?>
                <strong class="me-auto toast-alert">Alert</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?php 
                    $message = isset($_GET['message']) ? $_GET['message'] : '';
    
                    switch ($message) {
                        case 'add-item':
                            echo 'Data berhasil ditambahkan!';
                            break;
                        case 'delete-item':
                            echo 'Data berhasil dihapus!';
                            break;
                        case 'update-item':
                            echo 'Data berhasil diupdate!';
                            break;
                        default:
                            break;
                    }
                ?>
            </div>
        </div>
    </section>
</body>
</html>
