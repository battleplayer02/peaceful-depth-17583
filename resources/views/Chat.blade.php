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
    <script>
        var did;

        function setdocid(docid) {
            did = docid;
        }
    </script>
</head>
<body>
<!-- partial:index.partial.html -->
<pre>
{{print_r($data)}}
</pre>
<div class="container clearfix">
    <div class="people-list" id="people-list">
        <div class="search">
            <input type="text" placeholder="search"/>
            <i class="fa fa-search"></i>
        </div>
        <ul class="list">
            @foreach($data as $value)
                <li class="clearfix">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_09.jpg" alt="avatar"/>
                    <div class="about">
                        <div class="name" onclick="setdocid({{$value->docid}})">{{$value->doctorname[0]->name}}</div>
                        <div class="status">
                            <i class="fa fa-circle offline"></i> offline since Oct 28
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="chat">
        <div class="chat-header clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar"/>

            <div class="chat-about">
                <div class="chat-with">Chat with Vincent Porter</div>
                <div class="chat-num-messages">already 1 902 messages</div>
            </div>
            <i class="fa fa-star"></i>
        </div> <!-- end chat-header -->

        <div class="chat-history">
            <ul>
                <li class="clearfix">
                    <div class="message-data align-right">
                        <span class="message-data-time">10:10 AM, Today</span> &nbsp; &nbsp;
                        <span class="message-data-name">Olia</span> <i class="fa fa-circle me"></i>

                    </div>
                    <div class="message other-message float-right">
                        Hi Vincent, how are you? How is the project coming along?
                    </div>
                </li>
                <li>
                    <div class="message-data">
                        <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                        <span class="message-data-time">10:12 AM, Today</span>
                    </div>
                    <div class="message my-message">
                        Are we meeting today? Project has been already finished and I have results to show you.
                    </div>
                </li>


            </ul>
            a
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
    $(document).ready(function() {
        $("#sendbutton").click(function () {
            alert("helo");
            $.post("inputchat",
                {
                    '_token':@csrf,
                    'docid': did,
                    'message': document.getElementById('message-to-send').value,
                    'kaunbheja':
                        @if(session('logininfo')[0]->type=='patient')
                            0
                    @else
                    1
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
