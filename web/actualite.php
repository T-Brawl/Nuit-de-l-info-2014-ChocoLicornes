<ul>
<?php
    // For database connection
    include_once("header.php");



    // Function to get news by subscriptions of the user
    function getSubscribedNews($cpt_id)
    {
        // Prepare query
        $query_str = <<<SQL
    SELECT inf_id,
           inf_priority,
           inf_title
           inf_content,
           TO_CHAR(inf_date, "DD/MM/YYYY à HH24hMI") AS date,
           COALESCE(cmp_name, org_name) AS name,
           tag_name
    FROM Information info
        NATURAL JOIN Concern
        NATURAL JOIN Tag
        INNER JOIN Compte cpt ON (cpt.cpt_id = inf_sender)
        INNER JOIN Subscription sub ON (sub_cpt_id = :id)
SQL;
        $query = $connexion->prepare($query_str);
        $query->bindParam(":id", $cpt_id);
        $query->execute();

        // Browse through results
        $i = 0;
        $info = array();
        while( ($results = $query->fetch()) != NULL && $i < 10)
        {
            $id = $results["inf_id"];
            // Do not increment if id already exist (another row with a new tag)
            if($info[$id] == NULL)
            {
                $i++;
            }

            // Add tags if some already exist, else create an array to contain them
            $tags = $info[$id]["tags"]
            if($tags != null)
            {
                array_push($tags, $results["tag_name"]);
            }

            $info[$id] = array("priority" => $results["inf_priority"],
                               "title" => $results["inf_title"],
                               "content" => $results["inf_content"],
                               "date" => $results["date"],
                               "sender" => $results["name"],
                               "tags" => $tags);
        }

        return $info;
    }

    // Generate news from data
    function generateHTMLInfo($info_details)
    {
        $res = <<<HTML
        <li class="actu">
        <h4 class="actu_title">{$info_details["title"]}</h4>
        <p class="actu_content">
        {$info_details["content"]}
        </p>
        <ul class="actu_tags">
HTML;

        foreach ($info_details["tags"] as $tag)
        {
            $res .= <<<HTML
                <li class='actu_tag'>{$tag}</li>\t
HTML;
        }

        $res .= "\t</ul>\n</li>";

        return $res;
    }


    $infos = getSubscribedNews(<<<INSERT ID HERE>>>);
    $html = "";

    foreach ($infos as $info)
    {
        $html .= generateHTMLInfo($info);
    }

?>
</ul>