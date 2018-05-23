import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms'; 
import { AngularFireModule } from 'angularfire2';
import { AngularFirestoreModule } from 'angularfire2/firestore';
import { environment } from '../environments/environment';

import { TaskService } from  './services/task.service';

import { AppComponent } from './app.component';
import { TaskComponent } from './components/task/task.component';
import { HttpClientModule } from '@angular/common/http';
import { HttpModule } from '@angular/http';



@NgModule({
  declarations: [
    AppComponent,
    TaskComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpClientModule, 
    HttpModule,
    AngularFirestoreModule, 
    AngularFireModule,
    AngularFireModule.initializeApp(environment.firebase)
  ],
  providers: [
    TaskService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
