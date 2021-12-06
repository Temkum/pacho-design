<div>
    <div style="display:none" id="content" class="animate-bottom">
      <!-- this portion is for demo only -->

      <div class="row">
        <div class="container-fluid">
          <div class="col-md-12">
            <div class="brand-text float-left mt-4">
              <h3>Welcome <span>admin</span> </h3>
            </div>
            <div class="filter-toggle btn-group">
              <button class="btn btn-secondary date-btn" data-start_date="2021-12-06"
                data-end_date="2021-12-06">Today</button>
              <button class="btn btn-secondary date-btn" data-start_date="2021-11-29" data-end_date="2021-12-06">Last 7
                Days</button>
              <button class="btn btn-secondary date-btn active" data-start_date="2021-12-01"
                data-end_date="2021-12-06">This Month</button>
              <button class="btn btn-secondary date-btn" data-start_date="2021-01-01" data-end_date="2021-12-31">This
                Year</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Counts Section -->
      <section class="dashboard-counts">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 form-group">
              <div class="row">
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title text-center">
                    <div class="icon"><i class="dripicons-graph-bar" style="color: #733686"></i></div>
                    <div class="name"><strong style="color: #733686">Revenue</strong></div>
                    <div class="count-number revenue-data">8162.00</div>
                  </div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title text-center">
                    <div class="icon"><i class="dripicons-return" style="color: #ff8952"></i></div>
                    <div class="name"><strong style="color: #ff8952">Sale Return</strong></div>
                    <div class="count-number return-data">0.00</div>
                  </div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title text-center">
                    <div class="icon"><i class="dripicons-media-loop" style="color: #00c689"></i></div>
                    <div class="name"><strong style="color: #00c689">Purchase Return</strong></div>
                    <div class="count-number purchase_return-data">0.00</div>
                  </div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="wrapper count-title text-center">
                    <div class="icon"><i class="dripicons-trophy" style="color: #297ff9"></i></div>
                    <div class="name"><strong style="color: #297ff9">Profit</strong></div>
                    <div class="count-number profit-data">1788.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4>Cash Flow</h4>
                </div>
                <div class="card-body">
                  <canvas id="cashFlow" data-color="#733686" data-color_rgba="rgba(115, 54, 134, 0.8)"
                    data-recieved="[&quot;11314.00&quot;,&quot;18.00&quot;,&quot;1250.00&quot;,&quot;133.00&quot;,&quot;5620.00&quot;,&quot;0.00&quot;,&quot;8162.00&quot;]"
                    data-sent="[&quot;502.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;]"
                    data-month="[&quot;June&quot;,&quot;July&quot;,&quot;August&quot;,&quot;September&quot;,&quot;October&quot;,&quot;November&quot;,&quot;December&quot;]"
                    data-label1="Payment Received" data-label2="Payment Sent"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 mt-4">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>December 2021</h4>
                </div>
                <div class="pie-chart mb-2">
                  <canvas id="transactionChart" data-color="#733686" data-color_rgba="rgba(115, 54, 134, 0.8)"
                    data-revenue=8162 data-purchase=0 data-expense=0 data-label1="Purchase" data-label2="Revenue"
                    data-label3="Expense" width="100" height="95"> </canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Yearly Report</h4>
                </div>
                <div class="card-body">
                  <canvas id="saleChart"
                    data-sale_chart_value="[&quot;4218.00&quot;,&quot;42589.90&quot;,&quot;8.00&quot;,&quot;120.00&quot;,&quot;760.00&quot;,&quot;14294.00&quot;,&quot;18.00&quot;,&quot;2400.00&quot;,&quot;133.00&quot;,&quot;10140.00&quot;,&quot;0.00&quot;,&quot;8162.00&quot;]"
                    data-purchase_chart_value="[&quot;0.00&quot;,&quot;0.00&quot;,&quot;131.00&quot;,&quot;0.00&quot;,&quot;553.00&quot;,&quot;206.50&quot;,&quot;20.00&quot;,&quot;0.00&quot;,&quot;453.00&quot;,&quot;1862.00&quot;,&quot;0.00&quot;,&quot;0.00&quot;]"
                    data-label1="Purchased Amount" data-label2="Sold Amount"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>Recent Transaction</h4>
                  <div class="right-column">
                    <div class="badge badge-primary">Latest 5</div>
                  </div>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#sale-latest" role="tab" data-toggle="tab">Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#purchase-latest" role="tab" data-toggle="tab">Purchase</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#quotation-latest" role="tab" data-toggle="tab">Quotation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#payment-latest" role="tab" data-toggle="tab">Payment</a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade show active" id="sale-latest">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Reference</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Grand Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>06/12/2021</td>
                            <td>posr-20211206-055538</td>
                            <td>walk-in-customer</td>
                            <td>
                              <div class="badge badge-success">Completed</div>
                            </td>
                            <td>2390</td>
                          </tr>
                          <tr>
                            <td>06/12/2021</td>
                            <td>posr-20211206-055538</td>
                            <td>walk-in-customer</td>
                            <td>
                              <div class="badge badge-success">Completed</div>
                            </td>
                            <td>2390</td>
                          </tr>
                          <tr>
                            <td>06/12/2021</td>
                            <td>posr-20211206-055536</td>
                            <td>walk-in-customer</td>
                            <td>
                              <div class="badge badge-success">Completed</div>
                            </td>
                            <td>2390</td>
                          </tr>
                          <tr>
                            <td>06/12/2021</td>
                            <td>posr-20211206-051322</td>
                            <td>walk-in-customer</td>
                            <td>
                              <div class="badge badge-success">Completed</div>
                            </td>
                            <td>704</td>
                          </tr>
                          <tr>
                            <td>06/12/2021</td>
                            <td>posr-20211206-050707</td>
                            <td>walk-in-customer</td>
                            <td>
                              <div class="badge badge-success">Completed</div>
                            </td>
                            <td>288</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="purchase-latest">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Reference</th>
                            <th>Supplier</th>
                            <th>Status</th>
                            <th>Grand Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>03/10/2021</td>
                            <td>pr-20211003-010621</td>
                            <td>N/A</td>
                            <td>
                              <div class="badge badge-success">Recieved</div>
                            </td>
                            <td>882</td>
                          </tr>
                          <tr>
                            <td>03/10/2021</td>
                            <td>pr-20211003-010453</td>
                            <td>N/A</td>
                            <td>
                              <div class="badge badge-success">Recieved</div>
                            </td>
                            <td>980</td>
                          </tr>
                          <tr>
                            <td>21/09/2021</td>
                            <td>pr-20210921-034739</td>
                            <td>N/A</td>
                            <td>
                              <div class="badge badge-success">Recieved</div>
                            </td>
                            <td>101</td>
                          </tr>
                          <tr>
                            <td>21/09/2021</td>
                            <td>pr-20210921-032813</td>
                            <td>N/A</td>
                            <td>
                              <div class="badge badge-danger">Pending</div>
                            </td>
                            <td>352</td>
                          </tr>
                          <tr>
                            <td>06/07/2021</td>
                            <td>pr-20210706-011107</td>
                            <td>N/A</td>
                            <td>
                              <div class="badge badge-success">Recieved</div>
                            </td>
                            <td>10</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="quotation-latest">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Reference</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Grand Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>28/05/2021</td>
                            <td>qr-20210529-105356</td>
                            <td>walk-in-customer</td>
                            <td>
                              <div class="badge badge-danger">Pending</div>
                            </td>
                            <td>442</td>
                          </tr>
                          <tr>
                            <td>12/01/2021</td>
                            <td>qr-20210112-125803</td>
                            <td>walk-in-customer</td>
                            <td>
                              <div class="badge badge-danger">Pending</div>
                            </td>
                            <td>1660</td>
                          </tr>
                          <tr>
                            <td>09/12/2020</td>
                            <td>qr-20201210-053401</td>
                            <td>Ashfaq</td>
                            <td>
                              <div class="badge badge-danger">Pending</div>
                            </td>
                            <td>9500</td>
                          </tr>
                          <tr>
                            <td>23/10/2020</td>
                            <td>qr-20201024-090814</td>
                            <td>dhiman</td>
                            <td>
                              <div class="badge badge-danger">Pending</div>
                            </td>
                            <td>23000</td>
                          </tr>
                          <tr>
                            <td>22/10/2018</td>
                            <td>qr-20181023-061249</td>
                            <td>walk-in-customer</td>
                            <td>
                              <div class="badge badge-success">Sent</div>
                            </td>
                            <td>453</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="payment-latest">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Reference</th>
                            <th>Amount</th>
                            <th>Paid By</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>06/12/2021</td>
                            <td>spr-20211206-055539</td>
                            <td>2390</td>
                            <td>Cash</td>
                          </tr>
                          <tr>
                            <td>06/12/2021</td>
                            <td>spr-20211206-055539</td>
                            <td>2390</td>
                            <td>Cash</td>
                          </tr>
                          <tr>
                            <td>06/12/2021</td>
                            <td>spr-20211206-055537</td>
                            <td>2390</td>
                            <td>Cash</td>
                          </tr>
                          <tr>
                            <td>06/12/2021</td>
                            <td>spr-20211206-051323</td>
                            <td>704</td>
                            <td>Cash</td>
                          </tr>
                          <tr>
                            <td>06/12/2021</td>
                            <td>spr-20211206-050707</td>
                            <td>288</td>
                            <td>Deposit</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>Best Seller December</h4>
                  <div class="right-column">
                    <div class="badge badge-primary">Top 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>SL No</th>
                        <th>Product Details</th>
                        <th>Qty</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Mouse<br>[63920719]</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>mango<br>[72782608]</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>iphone-X<br>[97103461]</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Galaxy S9<br>[72100265]</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Baby doll<br>[31261512]</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>Best Seller 2021(Qty)</h4>
                  <div class="right-column">
                    <div class="badge badge-primary">Top 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>SL No</th>
                        <th>Product Details</th>
                        <th>Qty</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Mouse<br>[63920719]</td>
                        <td>23</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>mango<br>[72782608]</td>
                        <td>19</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>iphone-X<br>[97103461]</td>
                        <td>19</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Napa<br>[41930312]</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Baby doll<br>[31261512]</td>
                        <td>9</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>Best Seller 2021(Price)</h4>
                  <div class="right-column">
                    <div class="badge badge-primary">Top 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>SL No</th>
                        <th>Product Details</th>
                        <th>Grand Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>TV<br>[32703342]</td>
                        <td>34500.00</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>iphone-X<br>[97103461]</td>
                        <td>20900.00</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Mouse<br>[63920719]</td>
                        <td>10076.00</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Galaxy S9<br>[72100265]</td>
                        <td>7700.00</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Samsung Set<br>[39053411]</td>
                        <td>2400.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
