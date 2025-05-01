   <!-- Reported Cases -->
   <section class="container tw-mx-auto">

       <div class="row">
           <div class="col-12">
               <div class="card">
                   <div class="card-header">
                       <h4>Corruption Cases</h4>
                   </div>
                   <div class="card-body">
                       <div class="table-responsive">
                           <table class="table table-striped" id="table-1">
                               <thead>
                                   <tr>
                                       <th class="text-center">
                                           #
                                       </th>
                                       <th>Case</th>
                                       <th>Reporter</th>
                                       <th>Date</th>
                                       <th>Location</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach ($cases as $case)
                                       <tr>
                                           <td>{{ $case->id }}</td>
                                           <td>{{ $case->type }}</td>
                                           <td> {{ $case->reporter }} </td>
                                           <td> {{ $case->corruption_date }} </td>
                                           <td> {{ $case->location }} </td>
                                           <td>
                                               <div class="badge badge-success tw-shadow">Status</div>
                                           </td>
                                           <td><a href="#" class="btn btn-primary">See Details</a></td>
                                       </tr>
                                   @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>

   </section>
