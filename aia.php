
<!-- PHP Config File -->
<?php include 'resources/portal-config.php' ?>

<!DOCTYPE html>
<html lang = "en">
    <?php include 'resources/templates/header.php' ?>
    <body>
        <?php include 'resources/templates/modal.php' ?>
        <?php include 'resources/templates/nav-bar.php' ?>
        <div id = "main">
            <div id="aia-container">
                <h1>Final Project AIA</h1>
                <table id="table1">
                    <tbody>
                        <tr class="top-row odd">
                            <th>Client Name</th>
                            <td>Dameaion Clothenridge</td>
                        </tr>
                        <tr class="even">
                            <th>Website Name</th>
                            <td>Dargarth.org</td>
                        </tr>
                        <tr class="odd">
                            <th>Website Type</th>
                            <td>News/Blog</td>
                        </tr>
                        <tr class="even">
                            <th>Redesign?</th>
                            <td>Their old website was hacked, so while this is technically a redesign, 
                                I don’t have access to the old site.</td>
                        </tr>
                        <tr class="bottom-row odd">
                            <th>Goals</th>
                            <td>They want a website to post information about group events. They also want their 
                                site to link to other resources like their rulebook and credit tracker. Some of 
                                those resources may also need to be rebuilt.</td>
                        </tr>
                    </tbody>
                </table>
                <table id=table2>
                    <tbody>
                        <tr>
                            <th>Audience</th>
                            <th>Issues</th>
                            <th>Approach<th>
                        </tr>
                        <tr class="odd">
                            <td>Newcomers</td>
                            <td>
                                - They need information about where events are held<br>
                                - They need to be able to find the club rules<br>
                                - They need to be able to contact leaders from the club for more information<br>
                            </td>
                            <td>
                                - Event Information will be available via posts on the front page<br>
                                - Club rules can be accessed from the navigation bar on the top of the page<br>
                                - Contact information for the club can also found through the nav-bar<br>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>Active Memebers</td>
                            <td>
                                - They need to be able to see times and dates for events<br>
                                - They need to know where events are being held<br>
                                - They need to be able to access club resources, such as the rulebook<br>
                            </td>
                            <td>
                                - The time, date, and location of events will be posted on the main page by the club administrators<br>
                                - All of the club resources can be accessed from the nav-bar<br>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>Administrators</td>
                            <td>
                                - They need to be able to post information easily<br>
                                - Posted information needs to be accessible to everyone<br>

                            </td>
                            <td>
                                - Club administrators will be able to add and edit posts through Squarespace's user inerface
                                - Posts will be shown on the website's home page<br> 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include 'resources/templates/footer.php' ?>
    </body>
</html> 