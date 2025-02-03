import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { WelcomeComponent } from './welcome/welcome.component';
import { AutorListComponent } from './autor-list/autor-list.component';
import { LibroListComponent } from './libro-list/libro-list.component';
import { AutorCreateComponent } from './autor-create/autor-create.component';
import { LibroCreateComponent } from './libro-create/libro-create.component';
import { LibroEditComponent } from './libro-edit/libro-edit.component';
import { AutorEditComponent } from './autor-edit/autor-edit.component';

const routes: Routes = [
  { path: 'welcome', component: WelcomeComponent },
  { path: 'autor-list', component: AutorListComponent },
  { path: 'autor-create', component: AutorCreateComponent },
  { path: 'autor-edit/:id', component: AutorEditComponent },
  { path: 'libro-list', component: LibroListComponent },
  { path: 'libro-create', component: LibroCreateComponent },
  { path: 'libro-edit/:id', component: LibroEditComponent },
  { path: '', redirectTo: 'welcome', pathMatch: 'full' },
  { path: '**', redirectTo: 'welcome', pathMatch: 'full' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
