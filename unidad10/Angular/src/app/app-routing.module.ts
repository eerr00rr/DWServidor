import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { WelcomeComponent } from './welcome/welcome.component';
import { AutorListComponent } from './autor-list/autor-list.component';
import { LibroListComponent } from './libro-list/libro-list.component';

const routes: Routes = [
  { path: 'welcome', component: WelcomeComponent },
  { path: 'autor-list', component: AutorListComponent },
  { path: 'libro-list', component: LibroListComponent },
  { path: '', redirectTo: 'welcome', pathMatch: 'full' },
  { path: '**', redirectTo: 'welcome', pathMatch: 'full' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
