angular.module('mongolab', ['ngResource']).
  factory('Project', function($resource) {
    var Project = $resource('https://api.mongolab.com/api/1/databases' +
        '/klutzy-kalyn/collections/Comments/:id',
        { apiKey: 'rFPd1l3nT5_5AhS9IplSXgdECvyBUcCn' }, {
          update: { method: 'PUT' }
        }
    );

    Project.prototype.update = function(cb) {
      return Project.update({id: this._id.$oid},
          angular.extend({}, this, {_id:undefined}), cb);
    };

    return Project;
  });
