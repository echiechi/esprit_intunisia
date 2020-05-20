import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ListProduitComponent } from './list-produit/list-produit.component';

const routes: Routes = [{
  path: "list",
  component: ListProduitComponent
}];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ArtisanatRoutingModule { }
