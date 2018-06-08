@extends('layouts.beheer')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Permissie toevoegen</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <form action="{{route('permissions.store')}}" method="POST">
          {{csrf_field()}}



          <div class="block">
            <b-radio-group v-model="permissionType">
                <b-radio name="permission_type" native-value="basic" v-model="permissionType">Standaard Permissies</b-radio>
                <b-radio name="permission_type" native-value="crud" v-model="permissionType">Geadvanceerde Permissies</b-radio>
            </b-radio-group>
          </div>

          <div class="field" v-if="permissionType == 'basic'">
            <label for="display_name" class="label">Naam (Weergave Naam)</label>
            <p class="control">
              <input type="text" class="input" name="display_name" id="display_name">
            </p>
          </div>

          <div class="field" v-if="permissionType == 'basic'">
            <label for="name" class="label">Slug</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name">
            </p>
          </div>

          <div class="field" v-if="permissionType == 'basic'">
            <label for="description" class="label">Beschrijving</label>
            <p class="control">
              <input type="text" class="input" name="description" id="description" placeholder="Beschrijf wat de permissie doet">
            </p>
          </div>

          <div class="field" v-if="permissionType == 'crud'">
            <label for="resource" class="label">Hulpbron</label>
            <p class="control">
              <input type="text" class="input" name="resource" id="resource" v-model="resource" placeholder="De naam van de hulpbron">
            </p>
          </div>

          <div class="columns" v-if="permissionType == 'crud'">
            <div class="column is-one-quarter">
              <b-checkbox-group v-model="crudSelected">
                <div class="field">
                  <b-checkbox custom-value="toevoegen">Toevoegen</b-checkbox>
                </div>
                <div class="field">
                  <b-checkbox custom-value="lezen">Lezen</b-checkbox>
                </div>
                <div class="field">
                  <b-checkbox custom-value="bijwerken">Bijwerken</b-checkbox>
                </div>
                <div class="field">
                  <b-checkbox custom-value="verwijderen">Verwijderen</b-checkbox>
                </div>
              </b-checkbox-group>
            </div> <!-- end of .column -->

            <input type="hidden" v-model="crudSelected" name="crud_selected" :value="crudSelected">

            <div class="column">
              <table class="table" v-if="resource.length >= 3">
                <thead>
                  <th>Naam</th>
                  <th>Slug</th>
                  <th>Beschrijving</th>
                </thead>
                <tbody>
                  <tr v-for="item in crudSelected">
                    <td v-text="crudName(item)"></td>
                    <td v-text="crudSlug(item)"></td>
                    <td v-text="crudDescription(item)"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <button class="button is-success">Toevoegen</button>
        </form>
      </div>
    </div>

  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        permissionType: 'basic',
        resource: '',
        crudSelected: ['toevoegen', 'bekijken', 'bijwerken', 'verwijderen']
      },
      methods: {
        crudName: function(item) {
          return  app.resource.substr(0,1).toUpperCase() + app.resource.substr(1) + " " + item.substr(0,1) + item.substr(1);
        },
        crudSlug: function(item) {
          return app.resource.toLowerCase() + "-" + item.toLowerCase();
        },
        crudDescription: function(item) {
          return "Staat het " + item + " van " + app.resource.substr(0,1) + app.resource.substr(1) + " toe";
        }
      }
    });
  </script>
@endsection