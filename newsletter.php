
<?php
if (isset($_POST["newsletterSubmit"]) && $_POST["email"] != "") {
    // Everything is ok so send email
    sendMail($_POST["email"]);
    $successNewsletter = "You are now subscribed!";
} 
function sendMail($email) {
    $to = $email;
    $subject = "Make your vote up ";

    $newsletter = "<html>
                    <head>
                         <title>Latest news</title>
                    </head>
                    <body style='width: 750px;'>

                    <div style='text-align: center; height: 100px;'>
                        <img style='height:100%;' src='http://i68.tinypic.com/2qs9b3p.jpg'/>
                    </div>

                    <div style='width:100%;background-color:#3399cc;text-align:center;'>
                        <h1 style='color:#ffffff;padding: 10px 0;'>LATEST NEWS</h1>
                    </div>

                    <div style='padding: 25px; margin-bottom: 10px; background-color: #ebebeb'>
                        <div style='height: 260px'>
                            <div style='width: 38%; height:240px; float:left;'>
                                <img style='width:100%;height:100%;' src='http://i65.tinypic.com/fm53c5.jpg'/>
                            </div>
                            <div style='width: 60%;float:right;'>
                                <h2 style='margin-top:0;'><p style='margin-top:0;'><b>Trudeau signs Paris climate treaty at UN, says ‘Canada’s efforts will not cease’<b></p></h2>
                                <p>UNITED NATIONS, N.Y. – Prime Minister Justin Trudeau joined world leaders Friday to help formally ratify a global treaty on climate change.Putting his signature to the Paris accord was the easy part. The hard part comes next: reducing Canada’s greenhouse-gas emissions by 30 per cent over the ... ...coming decades.</p>
                            </div>
                        </div>

                        <div style='height: 260px'>
                            <div style='width: 38%; height:240px; float:left;'>
                                <img style='width:100%;height:100%;' src='http://i68.tinypic.com/2mqsvm0.jpg'/>
                            </div>
                        <div style='width: 60%;float:right;'>
                            <h2 style='margin-top:0;'><p style='margin-top:0;'><b>Mike Duffy trial: Duffy’s acquittal resonates in the Senate<b></p></h2>
                            <p>Senator Mike Duffy has been acquitted of all 31 charges of fraud, breach of trust and bribery and can immediately go back to work in the Senate with a full salary and benefits.When approached midday, as it increasingly looked like he would be acquitted, his Senate colleagues greeted the news with mixed emotions....</p>
                        </div>
                    </div>

                    <div style='height: 260px;'>
                        <div style='width: 38%; height:240px; float:left;'>
                            <img style='width:100%;height:100%;' src='http://i64.tinypic.com/2zsoa2w.jpg'/>
                        </div>
                        <div style='width: 60%;float:right;'>
                            <h2 style='margin-top:0;'><p style='margin-top:0;'><b>Reality check: Are Canadians ready for e-voting, or mandatory voting?<b></p></h2>
                            <p>As Justin Trudeau‘s federal government announced plans to start overhauling Canada’s electoral system on Wednesday, most of the attention was on how the ballots and counting system might change.</p>
                        </div>
                    </div>
                </div>

                <div style='width: 100%; background-color:#3399cc; padding: 20px;'>
                    <div style='border-bottom: 1px solid #ffffff; width: 60%; margin: 0 auto;'>
                        <h3 style='margin-bottom: 15px; color: #ffffff;'>FOLLOW US</h3>
                    </div>
                    <div style='width: 60%; height: 20px; margin: 0 auto; margin-top: 10px'>
                        <img style='width:5%; height: 100%;' src='http://i63.tinypic.com/166hc3s.png'/>
                        <img style='width:5%; height: 100%;' src='http://i64.tinypic.com/2i6hpig.jpg'/>
                        <img style='width:5%; height: 100%;' src='http://i67.tinypic.com/33l04ux.jpg'/>
                        <img style='width:5%; height: 100%; margin-left: 5px;' src='http://i68.tinypic.com/2lu2tra.jpg'/>
                    </div>
                    <div style='width:60%;margin: 0 auto; '>
                        <a style='text-decoration:none; margin-top: 10px;' href='http://makeyourvoteup.ca'><p style=' background-color:#99cc33; width: 30%;padding: 10px;color: #ffffff; text-align: center;'>VOTE FOR NOW</p></a>
                    </div>

                    <div style='width: 60%; margin: 0 auto; padding-top: 5px; font-size: 12px;'>
                        <a href='#'><p style='text-decoration: underline;margin-top: 0; color: #ffffff;'>unsubscribe</p></a>
                    </div>

                    <div style='width: 60%; margin: 0 auto; padding-top: 5px; font-size: 12px;'>
                        <img style='width:20%; height: 100%; float: left; margin-right: 10px;' src='http://i67.tinypic.com/wmh7o7.png' />
                        <p style='color: #ffffff;'>©2015-2016  make your vote All rights reserved make your voteup.</p>
                    </div>
                </div>
            </body>
        </html>";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";

    $headers .= "From: makeyourvoteup.com\r\n";

    $sendNewsletter = mail($to, $subject,  $newsletter, $headers); // Send email
    
    }
?>

