<template>
  <div>
      <br />
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produits</th>
                            <th scope="col">Disponibilité</th>
                            <th scope="col" class="text-center">Quantité</th>
                            <th scope="col" class="text-right">Prix</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr :key="info.id" v-for="info in data">
                            <td><img height="200px" width="200px" :src="encodeURI(`http://localhost:8000${info.image}`)" /> </td>
                            <td>{{info.product_name}}</td>
                            <td>{{info.available}}</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">{{info.price}} €</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <nuxt-link to="/product">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                    </nuxt-link>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <nuxt-link to="/Checkout"><button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button></nuxt-link>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
    name: "Cart",
  data(){
      return{
        data: []
      }
  },
  mounted(){
      const api = "http://localhost:8000/api/cart/show"
      const token = localStorage.getItem('token');
      axios.get(api, {headers:{"Authorization": `Bearer ${token}`}})
          .then((res)=>{
            console.log(res.data)
            this.data = res.data
          })
  }
    
}
</script>

<style>

</style>