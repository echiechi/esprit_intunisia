import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ArtisanatRoutingModule } from './artisanat-routing.module';
import { ListProduitComponent } from './list-produit/list-produit.component';

@NgModule({
  declarations: [ListProduitComponent],
  imports: [
    CommonModule,
    ArtisanatRoutingModule
  ]
})
export class ArtisanatModule { }
