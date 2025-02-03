import { AutorListComponent } from './autor-list/autor-list.component';
import { AutorCreateComponent } from './autor-create/autor-create.component';
import { AutorListFilterPipe } from './autor-list/autor-list-filter.pipe';

import { LibroListComponent } from './libro-list/libro-list.component';
import { LibroCreateComponent } from './libro-create/libro-create.component';

import { AppComponent } from './app.component';
import { AppRoutingModule } from './app-routing.module';
import { BrowserModule, provideClientHydration, withEventReplay } from '@angular/platform-browser';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { NgModule } from '@angular/core';
import { NavBarComponent } from './nav-bar/nav-bar.component';
import { provideHttpClient } from '@angular/common/http';
import { WelcomeComponent } from './welcome/welcome.component';
import { LibroEditComponent } from './libro-edit/libro-edit.component';
import { AutorEditComponent } from './autor-edit/autor-edit.component';

@NgModule({
  declarations: [
    AppComponent,
    NavBarComponent,
    AutorListComponent,
    WelcomeComponent,
    LibroListComponent,
    AutorListFilterPipe,
    LibroCreateComponent,
    AutorCreateComponent,
    LibroEditComponent,
    AutorEditComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
  ],
  providers: [
    provideClientHydration(withEventReplay()),
    provideHttpClient(),
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
