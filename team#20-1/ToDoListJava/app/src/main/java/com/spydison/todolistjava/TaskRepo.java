package com.spydison.todolistjava;

import android.app.Application;
import android.os.AsyncTask;

import androidx.lifecycle.LiveData;

import java.util.List;

public class TaskRepo {
    private Task_DAO taskDao;
    private LiveData<List<Task>> tasklist;

    public TaskRepo(Application application){
        TaskDatabase taskDatabase = TaskDatabase.getInstance(application);
        taskDao = taskDatabase.task_Dao();
        tasklist = taskDao.getData();
    }

    public void insertData(Task task){
        new InsertTask(taskDao).execute(task) ;
    }
    public void updateData(Task task){
        new UpdateTask(taskDao).execute(task) ;
    }
    public void deleteData(Task task){
        new DeleteTask(taskDao).execute(task) ;
    }
    public LiveData<List<Task>> getData(){
        return tasklist;
    }

    private static class InsertTask extends AsyncTask<Task,Void,Void>{
        private Task_DAO taskDao;

        public InsertTask(Task_DAO taskDao) {
            this.taskDao = taskDao;
        }

        @Override
        protected Void doInBackground(Task... tasks) {
            taskDao.insert(tasks[0 ]);
            return null;
        }
    }

    private static class UpdateTask extends AsyncTask<Task,Void,Void>{
        private Task_DAO taskDao;

        public UpdateTask(Task_DAO taskDao) {
            this.taskDao = taskDao;
        }

        @Override
        protected Void doInBackground(Task... tasks) {
            taskDao.update(tasks[0]);
            return null;
        }
    }
    private static class DeleteTask extends AsyncTask<Task,Void,Void>{
        private Task_DAO taskDao;

        public DeleteTask(Task_DAO taskDao) {
            this.taskDao = taskDao;
        }

        @Override
        protected Void doInBackground(Task... tasks) {
            taskDao.delete(tasks[0]);
            return null;
        }
    }

}
