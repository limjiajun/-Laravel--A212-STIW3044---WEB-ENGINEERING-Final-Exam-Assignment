<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>MainPage</title>
    <style>
        @media screen and (max-width: 1000px) {
            .w3-container {
                width: 100%;
            }
        }
        @media screen and (min-width: 1000px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }
    </style>

</head>

<body>
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif

    <header class="w3-center w3-padding-large w3-black">
        <a href="{{ url('login') }}" input class="w3-button  w3-white w3-border w3-border-red w3-round-large w3-right">Logout</a>
        <h2>Subject List</h2>
        
    </header>
    
    <div>
        <button class="w3-button  w3-white w3-border w3-border-red w3-round-large w3-right w3-margin" onclick="document.getElementById('create subject form').style.display= 'block';return false;">Create Subject Form</button>
    </div>

    <div class="w3-padding" style='max-width:1000px;margin:auto'>
        <table class="w3-table w3-striped w3-bordered">
            <thead>
                <th>No</th>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>TotalLearningHours</th>
                <th>Operations</th>
            </thead>
            @foreach ($listSubjects as $listItem)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $listItem->id}}</td>
                <td>{{ $listItem->subject_title}}</td>
                <td>{{ $listItem->subject_description }}</td>
                <td>{{ $listItem->subject_price}}</td>
                <td>{{ $listItem->subeject_TotalLearningHours}}</td>
                <td>
                    <div class="w3-cell">
                        <form method="post" action="{{route('markDelete',$listItem->id)}}" accept-charset="UTF-8" onsubmit="return confirm('Delete?');">
                            {{csrf_field()}}
                            <button class="w3-button w3-round w3-block" type="submit">
                                <i class="fa fa-trash"> </i></button>
                        </form>
                    </div>
                    <div class="w3-cell">
                        <button class="w3-button w3-round w3-block" onclick="document.getElementById('{{$loop->iteration}}').style.display='block';return false;"><i class="fa fa-pencil-square-o"> </i>
                        </button>
                    </div>
                    <div id="{{$loop->iteration}}" class="w3-modal w3-animate-opacity">
                        <div class="w3-modal-content w3-round" style="width:500px">
                            <header class=" w3-row  w3-dark-gray w3-border w3-border-red w3-round-large"> <span onclick="document.getElementById('{{$loop->iteration}}').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                                <h4 class="w3-margin-left">Update Subject Form</h4>
                            </header>
                            <div class="w3-padding">
                                <form method="post" action="{{route('markUpdate',$listItem->id)}}">
                                    {{csrf_field()}}
                                    <p><input class="w3-input w3-round w3-border" type="text" name="subTitle" placeholder="Title" value ="{{ $listItem->subject_title}}"></p>
                                    <textarea class="w3-input w3-round w3-border" rows="4" width="100%" type="text" name="subDescription" placeholder="Description" value ="{{ $listItem->subject_description}}"></textarea>
                                    <p><input class="w3-input w3-round w3-border" type="number" name="subPrice" placeholder="Price" step="any" value ="{{ $listItem->subject_price}}"></p>
                                    <p><input class="w3-input w3-round w3-border" type="number" name="subTotalLearningHours" placeholder="TotalLearningHours" value ="{{ $listItem->subeject_TotalLearningHours}}"></p>
                                    </textarea></p>
                                    <button class="w3-button  w3-blue-gray w3-border w3-border-red w3-round-large w3-margin type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
            @endforeach


        </table>
    </div>
    

    <div id="create subject form" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-round" style="width:500px">
            <header class="w3-row  w3-sand w3-border w3-border-red w3-round-large"> <span onclick="document.getElementById
     ('create subject form').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                <h4 class="w3-margin-left">Create New Subject Form</h4>
            </header>
            <div class="w3-padding">
                <form method="post" action="{{route('savesubject')}}">
                    {{csrf_field()}}
                    <p><input class="w3-input w3-round w3-border" type="text" name="subTitle" placeholder="Title" ></p>
                    <textarea class="w3-input w3-round w3-border" rows="4" width="100%" type="text" name="subDescription" placeholder="Description" ></textarea>
                    <p><input class="w3-input w3-round w3-border" type="number" name="subPrice" placeholder="Price" step="any" ></p>
                    <p><input class="w3-input w3-round w3-border" type="number" name="subTotalLearningHours" placeholder="TotalLearningHours" ></p>
              
                    
                    <button class="w3-button  w3-white w3-border w3-border-red w3-round-large w3-margin" type="submit">Insert</button>
                </form>
            </div>
        </div>

        
    </div>
 <!-- Footer -->
 <footer class="w3-footer w3-center w3-dark-gray    w3-padding-32">
    <p>&copy;  Copyright @2022 MyTutor. Designed By LIM JIA JUN</p>
    <div class="social-icon">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google-plus"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-youtube"></a>
    </div>
</footer>
</body>

</html>