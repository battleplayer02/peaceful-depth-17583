<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="@csrf">
    <title>Consult With Doctor</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>
    <script src="/js/scriptchat.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/css/stylechat.css">
</head>
<body>
<pre>
    {{print_r($previous_chats)}}
    {{print_r($docname)}}
</pre>

<!-- partial:index.partial.html -->
<div class="container clearfix">
    <div class="chat">
        <div class="chat-header clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar"/>

            <div class="chat-about">
                <div class="chat-with">{{$docname[0]->name}}</div>
                <div class="chat-num-messages">already 1 902 messages</div>
            </div>
            <i class="fa fa-star"></i>
        </div> <!-- end chat-header -->

        <div class="chat-history">
            <ul>
                @foreach($previous_chats as $value)
                    @if ($value->kaun_bheja == 0)
                        <li class="clearfix">
                            <div class="message-data align-right">
                                <span class="message-data-time">{{$value->date_and_time}}</span> &nbsp; &nbsp;
                                <span class="message-data-name">{{session('logininfo')[0]->name}}</span> <i class="fa fa-circle me"></i>

                            </div>
                            <div class="message other-message float-right">
                                {{$value->message}}
                            </div>
                        </li>
                    @else
                        <li>
                            <div class="message-data">
                                <span class="message-data-name"><i class="fa fa-circle online"></i> {{$docname[0]->name}}</span>
                                <span class="message-data-time">{{$value->date_and_time}}</span>
                            </div>
                            <div class="message my-message">
                                {{$value->message}}
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>

        </div> <!-- end chat-history -->

        <div class="chat-message clearfix">
            <textarea name="message-to-send" id="message-to-send" placeholder="Type your message" rows="3"></textarea>

            <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
            <i class="fa fa-file-image-o"></i>

            <button id="sendbutton">Send</button>

        </div> <!-- end chat-message -->

    </div> <!-- end chat -->

</div> <!-- end container -->

<script id="message-template" type="text/x-handlebars-template">
    <li class="clearfix">
        <div class="message-data align-right">
            <span class="message-data-time">, Today</span> &nbsp; &nbsp;
            <span class="message-data-name">Olia</span> <i class="fa fa-circle me"></i>
        </div>
        <div class="message other-message float-right">

        </div>
    </li>
</script>

<script id="message-response-template" type="text/x-handlebars-template">
    <li>
        <div class="message-data">
            <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
            <span class="message-data-time">, Today</span>
        </div>
        <div class="message my-message">

        </div>
    </li>
</script>
<!-- partial -->
<script>
    $(document).ready(function () {
        $("#sendbutton").click(function () {
            $.get("api/inputchat",
                {
                    'docid': {{$did}},
                    "pat_id":{{session('logininfo')[0]->id}},
                    'message': document.getElementById('message-to-send').value,
                    'kaunbheja':
                        @if(session('logininfo')[0]->type=='patient') 0
                    @else 1
                    @endif
                },
                function (data, status) {
                    document.getElementById('message-to-send').value = "";
                    alert("Data: " + data + "\nStatus: " + status);
                });
        });
    });

</script>

</body>
</html>
