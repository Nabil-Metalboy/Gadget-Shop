<div class="container">
        <div class="col-sm-12">
            <h3 align="center">Payment point here.</h3>
            <hr/>
            <form action="insert_payment" method="post"> 
            <table class="table" align="center" border="1">
                <tr>
                    <th>Cash on delivery</th>
                    <td><input type="radio" name='radio' value="cash_on_delivery"></td>
                </tr>

                <tr>
                    <th>Bkash</th>
                    <td><input type="radio" name="radio" value="bkash"></td>
                </tr>

                <tr>
                    <th>Paypal</th>
                    <td><input type="radio" name="radio" value="paypal"></td>
                </tr>

            </table>

                        <button align='center' type="submit" name="order_btn" class="btn btn-success">Confirm Order</button>
            </form>
                    <hr/>
        </div>
    </div>
