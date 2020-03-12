<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--<script type="text/javascript" src="http://api.bridgeit.mobi/bridgeit/bridgeit.js"></script>-->
        <script type="application/x-javascript" src="http://api.bridgeit.mobi/bridgeit/bridgeit.js"></script>
    </head>
    <body>
<!--        <a id='contactListBtn' type="button" onclick="bridgeit.fetchContact('id', 'callback');">Fetch a Contact</a>
        <a id='contactListBtn' type="button" onclick="bridgeit.fetchContact('contactListBtn', 'callback');">Fetch a Contact</a>-->
        <a id='contactListBtn' type="button" onclick="bridgeit.fetchContact('contactListBtn', 'onAfterReturnFromContacts');">Fetch a Contact</a>
        <div id="contacts"></div>

    </body>

    <script type="text/javascript">
        function onAfterReturnFromContacts(event) {
            if (event.value) {
                var text = unescape(event.value);

                var record = bridgeit.url2Object(text);
                var elem = document.getElementById('contacts');
                var ul = document.createElement('ul');
                ul.setAttribute('data-role', 'listview');
                ul.setAttribute('data-inset', 'true');
                ul.setAttribute('data-divider-theme', 'd');
                var recordHTML = '';
                for (var key in record) {
                    recordHTML += "<li><span class='ellipsis'><strong>"
                            + key + ": </strong>" + record[key] + "</span></li>";
                }
                ul.innerHTML = recordHTML;
                $(elem).prepend(ul);
                $('#contacts ul:first-child').listview().listview('refresh');
            }
        }
    </script>
</html>
