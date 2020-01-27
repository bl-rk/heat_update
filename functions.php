<?php
// conditional to check for title and pass the content from service data 

if ($_GET["cat"] == "loan")
{
 foreach($money as $id => $data)
           {
            $pageTitle = $data["title"];
            

        }
}
elseif ($_GET["cat"] == "finance")
{
 foreach($finance as $id => $data)
           {
            $pageTitle = $data["title"];

        }
}
elseif ($_GET["cat"] == "realtor")
{
 foreach($realtor as $id => $data)
           {
            $pageTitle = $data["title"];

        }
}
elseif ($_GET["cat"] == "consults")
{
 foreach($consults as $id => $data)
           {
            $pageTitle = $data["title"];

        }
}
elseif ($_GET["cat"] == "investment")
{
 foreach($investment as $id => $data)
           {
            $pageTitle = $data["title"];

        }
}
elseif ($_GET["cat"] == "insurance")
{
 foreach($insurance as $id => $data)
           {
            $pageTitle = $data["title"];

        }
}