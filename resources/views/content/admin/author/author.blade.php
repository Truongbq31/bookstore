@extends('templates.layout')
@section('content')
             <!-- Page Content  -->
             <div id="content-page" class="content-page">
                <div class="container-fluid">
                   <div class="row">
                      <div class="col-sm-12">
                         <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                               <div class="iq-header-title">
                                  <h4 class="card-title">Author Lists</h4>
                               </div>
                               <div class="iq-card-header-toolbar d-flex align-items-center">
                                  <a href="admin-add-author.html" class="btn btn-primary">Add New Author</a>
                               </div>
                            </div>
                            <div class="iq-card-body">
                               <div class="table-responsive">
                                  <table class="data-tables table table-striped table-bordered" style="width:100%">
                                     <thead>
                                        <tr>
                                           <th style="width: 5%;">No</th>
                                           <th style="width: 5%;">Profile</th>
                                           <th style="width: 20%;">Author Name</th>
                                           <th style="width: 60%;">Author Description</th>
                                           <th style="width: 10%;">Action</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        <tr>
                                           <td>1</td>
                                           <td>
                                              <img src="images/user/01.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                           </td>
                                           <td>Jhone Steben</td>
                                           <td>
                                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                           </td>
                                           <td>
                                              <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>2</td>
                                           <td>
                                              <img src="images/user/02.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                           </td>
                                           <td>John Klok</td>
                                           <td>
                                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                           </td>
                                           <td>
                                              <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>3</td>
                                           <td>
                                              <img src="images/user/03.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                           </td>
                                           <td>Ichae Semos</td>
                                           <td>
                                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                           </td>
                                           <td>
                                              <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>4</td>
                                           <td>
                                              <img src="images/user/04.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                           </td>
                                           <td>Jules Boutin</td>
                                           <td>
                                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                           </td>
                                           <td>
                                              <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>5</td>
                                           <td>
                                              <img src="images/user/05.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                           </td>
                                           <td>Kusti Franti</td>
                                           <td>
                                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                           </td>
                                           <td>
                                              <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>6</td>
                                           <td>
                                              <img src="images/user/06.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                           </td>
                                           <td>David King</td>
                                           <td>
                                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                           </td>
                                           <td>
                                              <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                           <td>
                                              <img src="images/user/07.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                           </td>
                                           <td>Henry Jurk</td>
                                           <td>
                                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                           </td>
                                           <td>
                                              <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>8</td>
                                           <td>
                                              <img src="images/user/08.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                           </td>
                                           <td>Attilio Marzi</td>
                                           <td>
                                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                           </td>
                                           <td>
                                              <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>9</td>
                                           <td>
                                              <img src="images/user/09.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                           </td>
                                           <td>Argele Intili</td>
                                           <td>
                                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                           </td>
                                           <td>
                                              <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>10</td>
                                           <td>
                                              <img src="images/user/10.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                           </td>
                                           <td>Attilio Marzi</td>
                                           <td>
                                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                           </td>
                                           <td>
                                              <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                           </td>
                                        </tr>
                                     </tbody>
                                  </table>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
@endsection
