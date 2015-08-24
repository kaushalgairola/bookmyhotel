<h2>Please Select Location to search available hotels</h2>
                        <table class="booking_form">
                            <form action="book.php" method="post">
                                <tr>
                                    <td>Location:</td>
                                    <td>
                                        <select name ="city" onChange="loadHotels(this.value)">
                                            <option>select city</option>
                                            <?php
                                                $db->city_combobox();
                                            ?>
                                        </select>
                                    </td>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="location" value="select location"/>
                                    </td>
                                </tr>
                            </form>
                        </table>