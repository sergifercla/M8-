package com.users.users.service;

import com.users.users.Model.User;
import com.users.users.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service

public class UserService {
    @Autowired
    private UserRepository repository;
    public List<User> listUsers(){
        return repository.findAll();
    }

    public void saveUser(User user){
        repository.save(user);
    }

    public User userId(Integer id){
        return repository.findById(id).get();
    }

    public void deleteUsers(Integer id){
        repository.deleteById(id);
    }
}

