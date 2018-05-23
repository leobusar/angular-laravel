import { Injectable } from '@angular/core';
import { Http }       from '@angular/http';
import { Task } from '../models/task';
import { Observable }     from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import { HttpHeaders } from '@angular/common/http';


@Injectable()
export class TaskService {


  constructor(private http: Http) {}

  getTasks(): Observable  <Task []>{
    return this.http
               .get('http://localhost/api/tareas')
               .map(response => response.json().data);
   }

  addTask(task: Task): Observable <Task>{
    return this.http
               .post('http://localhost/api/tareas', task, "")
               .map(response => response.json().data);
  }

deleteTask(task: Task){

}

}